<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Business extends Model

{
    public $timestamps = false;
    protected $fillable = [
        'name',
        'address',
        'about',
        'logo'
    ];

    public function services() {
        return $this->hasMany('App\Models\Service');
        
    }
}
