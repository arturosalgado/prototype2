<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MySelect extends Component
{
    public $records = null;
    public $checkeado = true;

    public function render()
    {
        return view('livewire.my-select');
    }
}
