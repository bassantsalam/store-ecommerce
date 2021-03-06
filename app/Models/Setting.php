<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;

class Setting extends Model
{
    use Translatable;

    protected $with = ['translation'];

    public $translatedAttributes = ['value'];

    protected $fillable = ['key', 'is_translatable', 'plain_value'];
    
    //casts 34an a8ayr taye database
    protected $casts = [
        'is_translatable' => 'boolean',
    ];


     public static function setMany($settings)
    {
        foreach ($settings as $key => $value) {
            self::set($key, $value);
        }
    }


    public static function set($key, $value)
    {
        if ($key === 'translatable')
        {
             return static::setTranslatableSettings($value);
        }

        if(is_array($value))
        {
            $value = json_encode($value);
        }

        static::UpdateOrCreate(['key' => $key], ['plain_value' => $value]);
    }



    public static function setTranslatableSettings($settings = [])
    {
        foreach ($settings as $key => $value){
            
            static::UpdateOrCreate(['key' => $key], [
                'is_translatable' => true,
                'value' => $value
                ]);
        }
    }
}
