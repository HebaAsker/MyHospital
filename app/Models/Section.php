<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Section extends Model
{
    use Translatable; // To add translation methods
    use HasFactory;

    protected $fillable =['name'];
    
    //To define which attributes needs to be translated
    public $translatedAttributes = ['name'];

    public function doctors()
    {
        return $this->hasMany(Doctor::class);
    }
}
