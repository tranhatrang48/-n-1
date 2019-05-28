<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    //
    protected $table = 'bills';
    
    //relationship vs billdetail
    public function bill_detail(){
        return $this->hasMany('App\BillDetail','id_bill','id');
    }
   //vs customer
   public function customer(){
    return $this->belongssTo('App\Customer','id_customer','id');
}

}
