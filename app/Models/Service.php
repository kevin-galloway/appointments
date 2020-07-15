<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'business_id',
        'type',
        'price'
    ];

    public function business() {
        return $this->belongsTo('App\Models\Business');
        
    }
}
