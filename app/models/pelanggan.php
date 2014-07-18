<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Description of golongan
 *
 * @author ajis
 */
class pelanggan extends Eloquent{
    protected $table = 'pelanggan';
    public $timestamps = false;
    
    public function golongan() {
        return $this->belongsTo("App\\Models\\golongan");
        
    }
    public function tagihan() {
        return $this->hasOne("App\\Models\\tagihan");
        
    }
}
