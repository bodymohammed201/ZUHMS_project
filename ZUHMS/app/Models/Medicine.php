<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    //use Translatable; // 2. To add translation methods
    protected $fillable =['name','price', 'amount', 'active_ingredient'];
    protected $attributes = [
        'name' => '','price'=>'', 'amount'=>'', 'active_ingredient'=>''
    ];
    // 3. To define which attributes needs to be translated
    //public $translatedAttributes = ['name','active_ingredient'];
    use HasFactory;


    
}
