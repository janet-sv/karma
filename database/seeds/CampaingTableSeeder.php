<?php

use App\Models\Campaing;
use Illuminate\Database\Seeder;

class CampaingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Campaing::class,30)->create();
    }
}
