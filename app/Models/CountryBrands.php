<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;

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

        $value_country = Cache::get('value_country');
        $value_brand   = Cache::get('value_brand');

        $query = self::select('countries.id as id','countries.name as name_country', 'brands.name as name_brand')
            ->leftjoin('countries', 'country_brands.country_id', '=', 'countries.id')
            ->leftjoin('brands', 'country_brands.brans_id', '=', 'brands.id');

        if( $value_country !== null ){
        
            if( $value_country !== '0' ){
                
                $query->where('countries.id', $value_country);
                
            }

        }
        
        if( $value_brand !== null ){
                
            if( $value_brand !== '0' ){

                $query->whereIn('brands.id', $value_brand);

            }

        }      
            
        $data = $query->get();
                               
        $record = [];

        foreach($data as $key => $item){ $record[$item->id][] = $item; }

        $result = [];

        foreach($record as $ke => $ite){

            $country = '';
            $brands  = [];

            foreach($ite as $k => $it){

                $country = $it->name_country;
                array_push($brands, $it->name_brand);

            }

            $result[$ke] = [
                'country' => $country,
                'brands'  => implode(', ', $brands)
            ];

        }

        return $result;
    }
}
