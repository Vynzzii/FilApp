<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faktur extends Model
{
    protected $guarded = [];

    protected $table = 'fakturs';

    public function customers(){
        return $this->belongsTo(Customer::class);
    }

    public function details(){
        return $this->hasMany(Detail::class, 'faktur_id');
    }
}
