<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merk extends Model
{
    use HasFactory;
    protected $guarded = [''];

    public function motor_cycles()
    {
        return $this->hasMany(MotorCycle::class, 'merk_id');
    }
}
