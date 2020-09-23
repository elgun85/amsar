<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
//Models
use App\Models\Article;
use App\Models\Category;
use App\Models\Page;
use App\Models\Contact;
use Mail;
use App\Models\Config;

class Homepage extends Controller
{
    public function __construct()
    {
        if (Config::find(1)->active==0) {
            return redirect()->to('aktiv-deyil')->send();
        }
        view()->share('pages',Page::where('status',1)->orderBy('order','ASC')->get());
        view()->share('config',Config::find(1));
        view()->share('categories',Category::where('status',1)-> inRandomOrder()->get());
    }

    public function index(){
        $data['articles']=Article::with('getCategory')->where('status',1)->whereHas('getCategory',function ($query){
$query->where('status',1);
        })->orderBy('id','DESC')->paginate(3);

        return view('front.homepage',$data);
    }
    public function single($category,$slug){
        $category=Category::whereSlug($category)->first() ?? abort(404,"Bele sehife yoxdur");
        $article=Article::where('slug',$slug)->whereCategoryId($category->id)->first() ?? abort(404,"Bele sehife yoxdur");
        $article->increment('hit');
        $data['article']=$article;

        return view('front.single',$data);

    }

    public function category($slug)
    {
        $category=Category::whereSlug($slug)->first() ?? abort(404,"Bele sehife yoxdur");
        $data['category']=$category;
        $data['articles']=Article::where('category_id',$category->id)->where('status',1)->orderBy('id','DESC')->paginate(3);

        return view('front.category',$data);
    }

    public function page($slug)
    {
        $page=Page::whereSlug($slug)->first() ?? abort(403,"Bele sehife yoxdur");
        $data['page']=$page;

        return view('front.page',$data);
    }

    public function contact()
    {
       return view('front.contact');
    }

    public function contact_post(Request $request)
    {

        $rules=[
            'name'=>'required|min:4',
            'email'=>'required|email',
            'movzu'=>'required',
            'telefon'=>'required',
            'message'=>'required|min:10'
        ];
        $validate=Validator::make($request->post(),$rules);
        if ($validate->fails()) {
            return redirect()->route('contact')->withErrors($validate)->withInput();
        }

        Mail::send([],[],function ($message) use ($request)
        {
            $message->from('amsar@gmail.com','yardim elanlari');
            $message->to('elgunhuseynov55@gmail.com');
            $message->to_email('elgunhuseynov55@gmail.com');

            $message->setBody(
                'Gonderen: '.$request->name.'<br>
                 Mail:'.$request->email.'<br>
                 Konu '.$request->movzu.'<br>
                 mesaj '.$request->message.'<br>
                 tarix '.now().'','text/html' );
            $message->subject($request->name.'mesaj gonderildi');



        });



        return redirect()->route('contact')->with('success','Müraciətiniz göndərildi');

    }
}
