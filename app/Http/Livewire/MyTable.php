<?php

namespace App\Http\Livewire;
use App\Models\CountryBrands;

use Livewire\Component;

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
        $select = 'all';
        $value  = 'all';

        $this->countriesAndBrands = CountryBrands::getAllCountriesBrands( $select, $value );
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
        $value = $countriesAndBrands;

        $this->countriesAndBrands = CountryBrands::getAllCountriesBrands( 'country', $value );
    }

    public function toggleSelectedBrand($countriesAndBrands)
    {
        $value = $countriesAndBrands;

        $this->countriesAndBrands = CountryBrands::getAllCountriesBrands( 'brand', $value );
    }

    public function render()
    {
        return view('livewire.my-table');
    }
}
