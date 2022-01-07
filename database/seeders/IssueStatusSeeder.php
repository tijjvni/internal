<?php

namespace Database\Seeders;

use App\Models\IssueStatus;
use Illuminate\Database\Seeder;

class IssueStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        IssueStatus::factory()->count(5)->create();
    }
}
