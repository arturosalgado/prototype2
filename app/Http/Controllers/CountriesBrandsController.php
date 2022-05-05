<?php

namespace App\Http\Controllers;
use App\Models\Brands;
use App\Models\Country;
use App\Models\CountryBrands;

use Illuminate\Http\Request;

class CountriesBrandsController extends Controller
{
    function mycomponent(){
        $brands = Brands::all();
        $country = Country::all();
        $checkCountries = true;
        $checkBrands = true;
        $countriesAndBrands = CountryBrands::getAllCountriesBrands();
        
        return view ("countriesbrands",[
            "brands"=>$brands,
            "countries"=>$country,
            "checkCountries" => $checkCountries,
            "checkBrands" => $checkBrands,
            "countriesAndBrands" => $countriesAndBrands
        ]);
    }
}
