<?php

namespace Tests\Feature\Http\Controllers;

// use App\Events\NewClient;
// use App\Jobs\WelcomeClient;
// use App\Mail\ClientWelcome;
// use App\Models\Client;
// use Illuminate\Foundation\Testing\RefreshDatabase;
// use Illuminate\Foundation\Testing\WithFaker;
// use Illuminate\Support\Facades\Event;
// use Illuminate\Support\Facades\Mail;
// use Illuminate\Support\Facades\Queue;
// use JMac\Testing\Traits\AdditionalAssertions;
// use Tests\TestCase;

// /**
//  * @see \App\Http\Controllers\ClientsController
//  */
// class ClientsControllerTest extends TestCase
// {
//     use AdditionalAssertions, RefreshDatabase, WithFaker;

//     /**
//      * @test
//      */
//     public function index_displays_view()
//     {
//         $clients = Clients::factory()->count(3)->create();

//         $response = $this->get(route('client.index'));

//         $response->assertOk();
//         $response->assertViewIs('clients.index');
//         $response->assertViewHas('clients');
//     }


//     /**
//      * @test
//      */
//     public function show_displays_view()
//     {
//         $client = Clients::factory()->create();
//         $client = Client::factory()->create();

//         $response = $this->get(route('client.show', $client));

//         $response->assertOk();
//         $response->assertViewIs('clients.show');
//         $response->assertViewHas('client');
//     }


//     /**
//      * @test
//      */
//     public function store_uses_form_request_validation()
//     {
//         $this->assertActionUsesFormRequest(
//             \App\Http\Controllers\ClientsController::class,
//             'store',
//             \App\Http\Requests\ClientsStoreRequest::class
//         );
//     }

//     /**
//      * @test
//      */
//     public function store_saves_and_redirects()
//     {
//         $name = $this->faker->name;

//         Mail::fake();
//         Queue::fake();
//         Event::fake();

//         $response = $this->post(route('client.store'), [
//             'name' => $name,
//         ]);

//         $clients = Client::query()
//             ->where('name', $name)
//             ->get();
//         $this->assertCount(1, $clients);
//         $client = $clients->first();

//         $response->assertRedirect(route('clients.index'));
//         $response->assertSessionHas('client.name', $client->name);

//         Mail::assertSent(ClientWelcome::class, function ($mail) use ($client) {
//             return $mail->hasTo($client->name) && $mail->client->is($client);
//         });
//         Queue::assertPushed(WelcomeClient::class, function ($job) use ($client) {
//             return $job->client->is($client);
//         });
//         Event::assertDispatched(NewClient::class, function ($event) use ($client) {
//             return $event->client->is($client);
//         });
//     }
// }

use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

    it('has a client index page')->get('/clients')->assertOk();