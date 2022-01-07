<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Issue;
use App\Models\Status;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\IssueController
 */
class IssueControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $issues = Issue::factory()->count(3)->create();

        $response = $this->get(route('issue.index'));

        $response->assertOk();
        $response->assertViewIs('issues.index');
        $response->assertViewHas('issues');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('issue.create'));

        $response->assertOk();
        $response->assertViewIs('issues.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\IssueController::class,
            'store',
            \App\Http\Requests\IssueStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $priority = $this->faker->numberBetween(-10000, 10000);
        $status = Status::factory()->create();

        $response = $this->post(route('issue.store'), [
            'priority' => $priority,
            'status' => $status->id,
        ]);

        $issues = Issue::query()
            ->where('priority', $priority)
            ->where('status', $status->id)
            ->get();
        $this->assertCount(1, $issues);
        $issue = $issues->first();

        $response->assertRedirect(route('issues.index'));
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $issue = Issue::factory()->create();

        $response = $this->get(route('issue.show', $issue));

        $response->assertOk();
        $response->assertViewIs('issues.show');
        $response->assertViewHas('issue');
    }
}
