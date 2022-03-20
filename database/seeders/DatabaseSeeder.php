<?php

namespace Database\Seeders;

use App\Models\Member;
use App\Models\Outlet;
use App\Models\Paket;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create();
        Member::factory(100)->create();
        Outlet::factory(100)->create();
        
    }
}
