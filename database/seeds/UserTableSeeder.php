<?php

use App\Models\User;
use App\Models\Organization;
use App\Models\Business;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class,5)->create();
        factory(Organization::class,15)->create();
        factory(Business::class,20)->create();
    }
}
