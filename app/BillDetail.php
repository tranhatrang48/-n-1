<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    //
    protected $table = 'bill_detail';
   //relationship vs product
    public function product(){
        return $this->belongsTo('App\Product','id_product','id');
    }
    //vs bill
    public function bill(){
        return $this->belongsTo('App\Bill','id_bill','id');
    }
}
