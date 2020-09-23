<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Models\User;




class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles=Article::orderBy('id','DESC')->get();

        return view('back.article.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        return view('back.article.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'min:2',
            'image'=>'required|image|mimes:jpeg,png,jpg|max:5000',
            'elaqe1'=>'max:13',
            'content'=>'max:300'

        ]);


        $article=new Article;
        $article->title=$request->title;
        $article->category_id=$request->kateqoriya;
        $article->ad=$request->ad;
        $article->cins=$request->cins;
        $article->dogum_tarixi=$request->tarix;
        $article->teleb_olunan=$request->teleb;
        $article->verilen=$request->verilen;
        $article->unvani=$request->unvan;
        $article->xesteliyi=$request->xesteliyi;
        $article->ad_elaqe1=$request->ad_elaqe_1;
        $article->ad_elaqe2=$request->ad_elaqe_2;
        $article->elaqe1=$request->elaqe_1;
        $article->elaqe2=$request->elaqe_2;
        $article->hesab=$request->hesab_bank;
        $article->hesab_bank=$request->bank_kodu;
        $article->status=$request->elan_goster;
        $article->status_2=$request->veziyyeti;
        $article->content=$request->content;
        $article->slug=Str::slug($request->title);

        if ($request->hasFile('image')) {

            $imageName=Str::slug($request->title).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads/maqale'),$imageName);
            $article->image='uploads/maqale/'.$imageName;
        }

        $article->save();
      toastr()->success('Uğurlar!', 'Yükləndi');
      return redirect()->route('admin.meqale.index');

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article=Article::findOrFail($id);
        //dd($article);
        $categories=Category::all();
        return view('back.article.update',compact('categories','article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=>'min:2',
            'image'=>'image|mimes:jpeg,png,jpg|max:5000',
            'elaqe1'=>'max:13',
            'content'=>'max:300'

        ]);


        $article=Article::findOrFail($id);
        $article->title=$request->title;
        $article->category_id=$request->kateqoriya;
        $article->ad=$request->ad;
        $article->cins=$request->cins;
        $article->dogum_tarixi=$request->tarix;
        $article->teleb_olunan=$request->teleb;
        $article->verilen=$request->verilen;
        $article->unvani=$request->unvan;
        $article->xesteliyi=$request->xesteliyi;
        $article->ad_elaqe1=$request->ad_elaqe_1;
        $article->ad_elaqe2=$request->ad_elaqe_2;
        $article->elaqe1=$request->elaqe_1;
        $article->elaqe2=$request->elaqe_2;
        $article->hesab=$request->hesab_bank;
        $article->hesab_bank=$request->bank_kodu;
        $article->status=$request->elan_goster;
        $article->status_2=$request->veziyyeti;
        $article->content=$request->content;
        $article->slug=Str::slug($request->title);

        if (File::exists($article->image)) {

            File::delete(public_path($article->image));
        }

        if ($request->hasFile('image')) {
$say=rand(1,40);
            $imageName=Str::slug($request->title).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads/maqale'),$imageName);
            $article->image='uploads/maqale/'.$imageName;
        }

        $article->save();
        toastr()->success('Uğurlar!', 'Deyisdirildi');
        return redirect()->route('admin.meqale.index');

    }

    public function switch(Request $request)
    {
        $article=Article::findOrFail($request->id);
        $article->status=$request->statu =='true' ? 1 : 0 ;
        $article->save();

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Article::findOrFail($id)->delete();
        toastr()->success('Uğurlar!', 'Məqalə silinənlər sihahısına göndərildi');
        return redirect()->route('admin.meqale.index');

    }
    public function trashed()
    {
        $articles=Article::onlyTrashed()->orderBy('deleted_at','DESC')->get();
        return view('back.article.trashed',compact('articles'));

    }
public function recovery_delete($id)
{
    Article::onlyTrashed()->find($id)->restore();
    toastr()->success('Silinən!', 'faylar geri qaytarıldı');
    return redirect()->back();
}
    public function hardDelete($id)
    {
        $article=Article::onlyTrashed()->findOrFail($id);


        if (File::exists($article->image)) {

            File::delete(public_path($article->image));
        }

        $article->forceDelete();
        toastr()->success('Uğurlar!', 'Silindi');
        return redirect()->route('admin.meqale.index');

    }
    public function destroy($id)
    {
        //
    }
}
