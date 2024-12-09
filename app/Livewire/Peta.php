<?php

namespace App\Livewire;

use App\Models\Lokasi;
use Livewire\Component;

class Peta extends Component
{
    public function render()
    {
        $lokasis = Lokasi::all();
        return view('livewire.peta' , compact('lokasis'));
    }
}
