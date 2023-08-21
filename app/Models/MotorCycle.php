<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MotorCycle extends Model
{
    use HasFactory;
    protected $guarded = [''];

    public function merk()
    {
        return $this->belongsTo(Merk::class, 'merk_id');
    }
}
