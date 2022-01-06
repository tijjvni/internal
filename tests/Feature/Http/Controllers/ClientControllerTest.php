<?php

use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

    it('has a client index page')->get('/client')->assertOk();