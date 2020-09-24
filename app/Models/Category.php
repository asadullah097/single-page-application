<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded=[];

    public function getRoutekeyName(){
        return "slug";
    }

    public function getPathAttribute(){
        return asset("api/category/$this->slug");
    }
}
