<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;

use App\Jobs\WelcomeClient;

use App\Models\Client;

class NewClient
{
    use SerializesModels;

    public $client;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
        $this->welcomeClient();
    }

    public function welcomeClient(){

        dd($this->client);
        WelcomeClient::dispatch($this->client);
    }
}
