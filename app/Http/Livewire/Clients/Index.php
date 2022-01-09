<?php

namespace App\Http\Livewire\Clients;

use Livewire\Component;

use App\Jobs\WelcomeClient;
use App\Models\Client;

class Index extends Component
{

    protected $listeners = ['NewClient'];
    
    public function NewClient(Client $client){
        WelcomeClient::dispatch($client);
        dd($client);
    }

    public $clients;
    public function mount($clients){
        dd($this->clients = $clients);
    }

    public function render()
    {
        return view('livewire.clients.index');
    }
}
