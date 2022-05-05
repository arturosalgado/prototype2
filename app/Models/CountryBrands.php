<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountryBrands extends Model
{
    use HasFactory;

    protected $table = 'country_brands';

    protected $fillable = ['country_id', 'brans_id'];

    public function dataCountry()
    {
        return $this->belongsTo('App\Models\Country', 'country_id', 'id');
    }

    public static function getAllCountries()
    {
        return Country::getAllCountries();
    }

    public static function getAllCountriesBrands()
    {
        $result = self::All();

        $data = [];

        foreach($result as $key => $item){
            
            $data[$key] = [
                'country' => $item->dataCountry->country,
                'brands'  => $item->brans_id
            ];
            
        }

        return $data;
    }
}
