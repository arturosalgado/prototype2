<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MySelect extends Component
{
    public $records = null;
    public $checkeado = true;
    public $name;
    public $selectedItem = null;
    
    public function render()
    {
        return view('livewire.my-select');
    }

    public function updated($name, $value)
    {
        if($name == 'checkeado'){

            if($this->name == "countries"){
                $this->emit('toggleCountry', $value);
            }

            if($this->name == "brands"){
                $this->emit('toggleBrands', $value);
            }
            
        }

        if($name == 'selectedItem'){

            if($this->name == 'countries'){

                $this->emit('toggleSelectedCountry', $value);
            }

            if($this->name == 'brands'){
                
                $this->emit('toggleSelectedBrand', $value);
            }
            
        }
        
    }
}
