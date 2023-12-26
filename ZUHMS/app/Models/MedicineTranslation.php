<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicineTranslation extends Model
{
    protected $fillable = ['name','active_ingredient'];
    public $timestamps = false;
    use HasFactory;
}
