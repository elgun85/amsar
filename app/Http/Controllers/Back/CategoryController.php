<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;
use App\Models\Article;
use App\Models\User;

class CategoryController extends Controller
{
    public function index ()
    {
        $categories= Category::all();
        return view('back.categories.index',compact('categories'));
    }

    public function create(Request $request)
    {
        $isExits=Category::whereSlug(Str::slug($request->kateqoriya))->first();
        if ($isExits) {
            toastr()->error('Yüklənmədi!', 'Bуlə kateqoriya artıq mövcuddur!');
            return redirect()->back();

        }
        $category=new Category;
        $category->name=$request->kateqoriya;
        $category->slug=Str::slug($request->kateqoriya);
        $category->save();
        toastr()->success('Uğurlar!', 'Yeni kateqoriya Yükləndi');
        return redirect()->back();
    }

    public function update(Request $request)
    {
//        $isSlug=Category::whereSlug(Str::slug($request->slug))->whereNotIn('id',[$request->id])->first();
//        $isName=Category::whereName($request->kateqoriya)->whereNotIn('id',[$request->id])->first();
        $isSlug=Category::whereSlug(Str::slug($request->slug))->first();
        $isName=Category::whereName($request->kateqoriya)->first();

        if ($isSlug or $isName) {
            toastr()->error($request->kateqoriya.'Yüklənmədi!', 'Belə kateqoriya ve ya slug  artıq mövcuddur!');
            return redirect()->back();
        }
        $category=Category::find($request->id);
        $category->name=$request->kateqoriya;
        $category->slug=Str::slug($request->slug);
        $category->save();
        toastr()->success('Uğurlar!', 'Kateqoriya deyisdirildi');
        return redirect()->back();
    }

    public function delete(Request $request)
    {
        $category=Category::findOrFail($request->id);
        if ($category->id==0) {
            toastr()->error('Bu kateqoriyani silmek olmaz!');
            return redirect()->back();
        }
        $message='';
        $count=$category->articleCount();
        if ($count>0) {
            Article::where('category_id',$category->id)->update(['category_id'=>0]);
            $defaultCategory=Category::find(0);
            $message='Bu kateqoriyaya aid ' .$count. ' maqale '.$defaultCategory->name.' kateqoriyasina kocuruldu.';
        }
        $category->delete();
        toastr()->success('Bu kateqoriya silindi!',$message);
        return redirect()->back();
    }

    public function getData(Request $request)
    {
        $category=Category::findOrFail($request->id);
        return response()->json($category);
    }

    public function switch(Request $request)
    {
        $category=Category::findOrFail($request->id);
        $category->status=$request->statu =='true' ? 1 : 0 ;
        $category->save();
    }
}
