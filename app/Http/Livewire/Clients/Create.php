<?php

namespace App\Http\Livewire\Clients;

use Livewire\Component;

use App\Http\Requests\ClientStoreRequest;
use App\Models\Client;
use App\Models\User;
use App\Jobs\WelcomeClient;


use Illuminate\Support\Facades\Mail;
use App\Mail\ClientWelcome;

class Create extends Component
{
    public $name;
    public $email;

    protected $listeners = ['NewClient'];
    
    public function NewClient($client){
        // WelcomeClient::dispatch($client['id']);
        // dd($client);
        try {
            $client = Client::findOrFail($client['id']);
            // WelcomeClient::dispatch($client);
            Mail::to($client->user->email)->send(new ClientWelcome($client));
            dd($client);
        } catch (\Throwable $th) {
            session()->flash('flash.banner','Fatal error occured. '.$th->getMessage());

            return redirect()->route('clients.index'); 
        }

    }

    public function createClient(){

        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
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


        $this->emit('NewClient',$client);        
	    session()->flash('flash.banner', $client->name.' added successfully');

        // return redirect()->route('clients.index'); 
    }

    public function render()
    { 
        return view('livewire.clients.create');
    }
}


