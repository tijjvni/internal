<?php

namespace App\Http\Livewire\Clients;

use Livewire\Component;

use App\Http\Requests\ClientStoreRequest;
use App\Models\Client;
use App\Models\User;

class Create extends Component
{
    public $name;
    public $email;

    protected $listeners = ['NewClient' => 'newClient'];

    public function newClient(Client $client){

    }

    public function createClient(){

        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
	    ]);

        $name = $this->name;
        $email = $this->email;

        $password = substr(str_shuffle(md5(time())),0,10);
                

        $user = new User;
        $user->name = $name;
        $user->email = $email;
        $user->password = bcrypt($password);
        $user->save();

        $client = new Client;
        $client->name = $name;
        $client->user_id = $user->id;
        $client->save();

        $this->emit('NewClient',$client->id);

    }

    public function render()
    { 
        return view('livewire.clients.create');
    }
}


