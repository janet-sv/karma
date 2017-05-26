<?php

use App\Models\Benefit;
use Illuminate\Database\Seeder;

class BenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Benefit::class,30)->create();
    }
}
