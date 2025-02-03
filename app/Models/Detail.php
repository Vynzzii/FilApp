<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class detail extends Model
{
    protected $guarded = [];

    protected $table = 'details';

    public function brangs(){
        return $this->belongsTo(Barang::class);
    }
    public function fakturs(){
        return $this->belongsTo(Faktur::class, 'id');
    }
}
