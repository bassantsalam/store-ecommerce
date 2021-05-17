<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use CategoryDatabaseSeeder;
class Category extends Model
{
    use Translatable;

    protected $with = ['translation'];

    public $translatedAttributes = ['name'];

    protected $fillable = ['parent_id', 'slug', 'is_active', 'position', 'is_searchable'];
    protected $hidden = ['translations'];
    
    //casts 34an a8ayr taye database
    protected $casts = [
        'is_translatable' => 'boolean',
        'is_searchable' => 'boolean',
    ];
}
