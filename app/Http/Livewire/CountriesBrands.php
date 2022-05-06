<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\CountryBrands;

class CountriesBrands extends Component
{
    public $checkCountry = true;
    public $checkBrands = true;
    

    public $message;

    public function render()
    {
        $countries = CountryBrands::getAllCountries();

        $countriesTable = CountryBrands::getAllCountriesBrands();
        
        return view('livewire.countries-brands', [
            'countries' => $countries,
            'countriesTable' => $countriesTable
        ]);
    }

    public function updated($name, $value)
    {
        if($name === "selectedCountry"){
            dd($name);
        }
    }
}
