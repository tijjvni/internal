<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;

class Index extends Component
{

    public $clients;

    public function mount(){
        
        dd($clients);
    }

    public function render()
    {
        return view('livewire.client.index');
    }
}
