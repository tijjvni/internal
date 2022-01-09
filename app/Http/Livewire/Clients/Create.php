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

    public function createClient(){
        $request = request()->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
        ]);

        dd($request);

        $name = request()->only('name');
        $email = request()->only('email');

        $password = substr(str_shuffle(md5(time())),0,10);
                

        $user = new User;
        $user->name = $name;
        $user->email = $email;
        $user->password = bcrypt($password);
        $user->save();

        dd($user);

        $client = new Client;
        $client->name = $name;
        $client->user_id = $user->id;
        $client->save();

        $this->emit('NewClient',$client);

    }

    public function render()
    { 
        return view('livewire.clients.create');
    }
}
