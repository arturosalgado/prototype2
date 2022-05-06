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
        'toggleCountry' => 'toggleCountry',
        'toggleBrands' => 'toggleBrands'
    ];

    public function mount()
    {
        $this->countriesAndBrands = CountryBrands::getAllCountriesBrands();
    }

    public function toggleCountry($showCountry)
    {
        $this->showCountry = $showCountry;
    }

    public function toggleBrands($showBrand)
    {
        $this->showBrand = $showBrand;
    }

    public function render()
    {
        return view('livewire.my-table');
    }
}
