<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;

class NewClient
{
    use SerializesModels;

    public $client;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($client)
    {
        $this->client = $client;
    }
}
