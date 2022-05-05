<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MyTable extends Component
{
    public $countriesAndBrands = null;
    public $columnCountry;
    public $columnBrand;

    public function render()
    {
        return view('livewire.my-table');
    }
}
