<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Description of golongan
 *
 * @author ajis
 */
class golongan extends Eloquent{
    protected $table = 'golongan';
    public $timestamps = false;
    
    public function pelanggan() {
        return $this->hasMany("App\\Models\\pelanggan");
    }
    public function tagihan() {
        return $this->hasOne("App\\Models\\tagihan");
        
    }
}
