<?php

namespace App\Http\Livewire\Clients;

use Livewire\Component;

class Show extends Component
{

    protected $clients;

    public function mount($client){
        $this->client = $client;
    }
    
    public function render()
    {
        $client = $this->client;
        return view('livewire.clients.show',[
            'client' => $client
        ]);
    }
}
