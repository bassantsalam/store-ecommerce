<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
class CategoryTranslation extends Model
{
    protected $fillable = ['name'];
    public $timestamps = false;

}
