<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    function articleCount()
    {
//        return $this->hasMany('App\Models\Article','category_id','id')->where('status',1)->count();
        return $this->hasMany('App\Models\Article','category_id','id')->where('status',1)->count();
                                //baglananacagimiz model   baglananacagimiz sutun       baglanacaq id

    }
}
