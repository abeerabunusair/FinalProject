<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\product;

class category extends Model
{
    use HasFactory;
    //لا حقل ممنوع دخوله على الداتا بيز
       protected $guarded=[];
    public function products(){
        return $this->hasMany(product::class,'categories_id' ,'id');
    }
}
