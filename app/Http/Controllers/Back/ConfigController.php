<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Config;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;


class ConfigController extends Controller
{
   public function index()
   {
       $config=Config::findOrFail(1);
       return view('back.config.index',compact('config'));
   }

   public function update(Request $request)
   {


       if ($request->hasFile('logo')) {
           $config=Config::findOrFail(1);
           $config->title=$request->title;
           $config->active=$request->active;
           $config->url=$request->url;
           $config->description=$request->description;
           $config->author=$request->author;
           $config->keywords=$request->keywords;
           $config->tel=$request->tel;
           $config->instagram=$request->instagram;
           $config->facebook=$request->facebook;
           $config->youtube=$request->youtube;

           if (File::exists($config->logo)) {

               File::delete(public_path($config->logo));
           }


           $imageName=Str::slug($request->title).'-logo.'.$request->logo->getClientOriginalExtension();
           $request->logo->move(public_path('uploads/config'),$imageName);
           $config->logo='uploads/config/'.$imageName;
       }else
       {
           $config=Config::findOrFail(1);
           $config->title=$request->title;
           $config->active=$request->active;
           $config->url=$request->url;
           $config->description=$request->description;
           $config->author=$request->author;
           $config->keywords=$request->keywords;
           $config->tel=$request->tel;
           $config->instagram=$request->instagram;
           $config->facebook=$request->facebook;
           $config->youtube=$request->youtube;

       }

       if ($request->hasFile('favicon')) {
           $config=Config::findOrFail(1);
           $config->title=$request->title;
           $config->active=$request->active;
           $config->url=$request->url;
           $config->description=$request->description;
           $config->author=$request->author;
           $config->keywords=$request->keywords;
           $config->tel=$request->tel;
           $config->instagram=$request->instagram;
           $config->facebook=$request->facebook;
           $config->youtube=$request->youtube;


           if (File::exists($config->favicon)) {

               File::delete(public_path($config->favicon));
           }
           $imageName=Str::slug($request->title).'-favicon.'.$request->favicon->getClientOriginalExtension();
           $request->favicon->move(public_path('uploads/config'),$imageName);
           $config->favicon='uploads/config/'.$imageName;
       }else
       {
           $config=Config::findOrFail(1);
           $config->title=$request->title;
           $config->active=$request->active;
           $config->url=$request->url;
           $config->description=$request->description;
           $config->author=$request->author;
           $config->keywords=$request->keywords;
           $config->tel=$request->tel;
           $config->instagram=$request->instagram;
           $config->facebook=$request->facebook;
           $config->youtube=$request->youtube;


       }

       $config->save();
       toastr()->success( 'Yenilendi');
       return redirect()->back();
   }
}
