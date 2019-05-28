<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'products';

    //relationship vs product_type
    public function type_products(){
        return $this->belongsTo('App\ProductType','id_type','id');
    }
    //vs bill_detail
    public function bill_detail(){
        return $this->hasMany('App\BillDetail','id_product','id');
    }

}
