<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class macaddresse extends Model
{
    //
    protected $table="macaddresses";
    public function instansi(){
        return $this->belongsTo(instansi::class);
    }
}
