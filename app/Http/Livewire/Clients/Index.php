<?php

namespace App\Http\Livewire\Clients;

use Livewire\Component;

use App\Jobs\WelcomeClient;
use App\Models\Client;

class Index extends Component
{

    protected $listeners = ['NewClient'];
    
    public $clients;

    public function NewClient(Client $client){
        WelcomeClient::dispatch($client);
        dd($client);
    }

    public function mount($clients){
        dd($clients);
    }
    

    public function render()
    {
        $clients = $this->clients;
        return view('livewire.clients.index',[
            'clients' => $clients
        ]);
    }
}
