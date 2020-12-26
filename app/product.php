<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $primaryKey = 'prodcut_id';
    protected $table="products";
    protected $fillable=['order_products','	prodcut_name','prodcut_cat','departmentNAME','prodcut_price','discount','prodcut_wasf','prodcut_info','prodcut_img'];
    protected $hidden=['creates_at','updated_at'];

}
