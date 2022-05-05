<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    use HasFactory;

    protected $table = 'brands';

    protected $fillable = ['name'];

    public static function getAllBrands()
    {
        return self::all();
    }

    public static function nameBrand($id)
    {
        return self::where('id', $id)->first()->name;
    }

}
