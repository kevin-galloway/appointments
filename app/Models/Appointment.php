<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'user_id',
        'service_id',
        'start',
        'end'
    ];

    public function service() {
        return $this->belongsTo('App\Models\Service');
        
    }
}
