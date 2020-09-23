<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Page;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class PageController extends Controller
{
    public function index()
    {
        $pages=Page::all();
        return view('back.pages.index',compact('pages'));
    }
    public function create()
    {

        return view('back.pages.create');
    }

    function createMenu(Request $request)
    {
        $request->validate([
            'title'=>'min:2',
            'image'=>'required|image|mimes:jpeg,png,jpg|max:5000',
            'content'=>'max:300'

        ]);


        $axirinci_sira=Page::orderBy('order','desc')->first();
        $page=new Page;
        $page->title=$request->title;
        $page->order=$axirinci_sira->order+1;
        $page->content=$request->content;
        $page->slug=Str::slug($request->title);

        if ($request->hasFile('image')) {
            $imageName=Str::slug($request->title).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads/page'),$imageName);
            $page->image='uploads/page/'.$imageName;
        }
        $page->save();
        toastr()->success('Uğurlar!', 'Yükləndi');
        return redirect()->route('admin.page.index');
    }
    public function edit($id)
    {
        $page=Page::findOrFail($id);
        return view('back.pages.update',compact('page'));
    }

    public function editPage(Request $request, $id)
    {
        $request->validate([
            'title'=>'min:2',
            'image'=>'image|mimes:jpeg,png,jpg|max:5000',
            'content'=>'max:300'

        ]);




        if ($request->hasFile('image')) {
            $page=Page::findOrFail($id);
            $page->title=$request->title;
            $page->content=$request->content;
            $page->slug=Str::slug($request->title);

            if (File::exists($page->image)) {

                File::delete(public_path($page->image));
            }

            $imageName=Str::slug($request->title).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads/page'),$imageName);
            $page->image='uploads/page/'.$imageName;
        } else
            {
                $page=Page::findOrFail($id);
                $page->title=$request->title;
                $page->content=$request->content;
                $page->slug=Str::slug($request->title);
            }

        $page->save();
        toastr()->success('Uğurlar!', 'Deyisdirildi');
        return redirect()->route('admin.page.index');

    }

    public function delete($id)
    {
        $page=Page::findOrFail($id);


        if (File::exists($page->image)) {

            File::delete(public_path($page->image));
        }

        $page->delete();
        toastr()->success('Silindi');
        return redirect()->route('admin.page.index');
    }


    public function orders(Request $request)
    {
        foreach ($request->get('page') as $key => $order) {
            Page::where('id',$order)->update(['order'=>$key]);
        }
    }


    public function switch(Request $request)
    {
        $page=Page::findOrFail($request->id);
        $page->status=$request->statu =='true' ? 1 : 0 ;
        $page->save();

    }
}
