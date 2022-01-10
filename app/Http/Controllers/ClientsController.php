<?php

namespace App\Http\Controllers;

use App\Events\NewClient;
use App\Http\Requests\ClientsStoreRequest;
use App\Mail\ClientWelcome;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ClientsController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $clients = Client::all();
        
        return view('clients.index', compact('clients'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('clients.create');
    }

    /**
     * @param \App\Http\Requests\ClientsStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientsStoreRequest $request)
    {
        $client = Client::create($request->validated());

        // Mail::to($client->user->email)->send(new ClientWelcome($client));

        // WelcomeClient::dispatch($client);

        event(new NewClient($client));

        $request->session()->flash('client.name', $client->name);

        return redirect()->route('clients.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Client $client
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $client)
    {
        $client = Client::findOrFail($client);
        return view('clients.show', compact('client'));
    }
}
