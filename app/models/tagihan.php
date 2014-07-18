<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Description of tagihan
 *
 * @author ajis
 */
class tagihan extends Eloquent{
   protected $table = 'tagihan';
   public $timestamps = false;
   
   
   public function pelanggan () {
      return $this->belongsTo("App\\Models\pelanggan"); 
    }
  public function golongan () {
      return $this->belongsTo("App\\Models\golongan"); 
    }  
}
