<?php

namespace App\Http\Livewire;
use App\Models\CountryBrands;

use Livewire\Component;
use Illuminate\Support\Facades\Cache;

class MyTable extends Component
{
    public $countriesAndBrands = null;

    public $showCountry = true;

    public $showBrand = true;

    protected $listeners = [
        'toggleCountry'         => 'toggleCountry',
        'toggleBrands'          => 'toggleBrands',
        'toggleSelectedCountry' => 'toggleSelectedCountry',
        'toggleSelectedBrand'   => 'toggleSelectedBrand'
    ];

    public function mount()
    {
        $this->countriesAndBrands = CountryBrands::getAllCountriesBrands();
    }

    public function toggleCountry($showCountry)
    {;
        $this->showCountry = $showCountry;
    }

    public function toggleBrands($showBrand)
    {
        $this->showBrand = $showBrand;
    }
    public function toggleSelectedCountry($countriesAndBrands)
    {
        Cache::forget('value_country');

        Cache::put('value_country', $countriesAndBrands);

        $this->countriesAndBrands = CountryBrands::getAllCountriesBrands();
    }

    public function toggleSelectedBrand($countriesAndBrands)
    {
        Cache::forget('value_brand');

        if( is_array($countriesAndBrands) ){

            if( $countriesAndBrands[0] !== '0'){

                Cache::put('value_brand', $countriesAndBrands);

            }

        }

        $this->countriesAndBrands = CountryBrands::getAllCountriesBrands();
    }

    public function render()
    {
        return view('livewire.my-table');
    }
}
