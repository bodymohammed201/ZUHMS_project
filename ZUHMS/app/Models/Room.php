<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    public $fillable = ['id', 'patient_id', 'room'];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
