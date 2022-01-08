<?php

namespace App\Http\Livewire\Clients;

use Livewire\Component;

class Index extends Component
{

    public $clients;
    public function mount($clients){
        dd($this->clients = $clients);
    }

    public function render()
    {
        return view('livewire.clients.index');
    }
}
