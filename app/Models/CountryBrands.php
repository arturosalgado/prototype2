<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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

    public static function getAllCountriesBrands($select, $value)
    {
        $query = self::select('countries.id as id','countries.name as name_country', 'brands.name as name_brand')
                     ->leftjoin('countries', 'country_brands.country_id', '=', 'countries.id')
                     ->leftjoin('brands', 'country_brands.brans_id', '=', 'brands.id');
            if($value == 'all' || $value[0] == 'all' ){
                //$query->where('');

            }elseif($select == 'country'){

                $query->where('countries.id', $value);

            }elseif($select == 'brand'){
                
                $query->whereIn('brands.id', $value);

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
