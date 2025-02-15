<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guarded = [];

    protected $table = 'customers';

    public function fakturs(){
        return $this->belongsTo(Faktur::class);
    }
}
