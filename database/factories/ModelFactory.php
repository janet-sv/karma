<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Benefit::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->text(50),
        'description' => $faker->paragraph(),
        'image_url' => 'http://institutoavanzadodecolumna.es/wp-content/uploads/2016/06/image.jpeg',
        'due_date' => $faker->dateTimeBetween('now','+30 days'),
        'place' => $faker->text(15),
        'points' => $faker->numberBetween(10,99),
//        'qr_file' => url()->full().'/qr/qrimage.png',
    ];
});

$factory->define(App\Models\Campaing::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->text(30),
        'description' => $faker->paragraph(),
        'start_date' => $faker->dateTimeThisMonth(),
        'finish_date' => $faker->dateTimeBetween('now','+100 days'),
        'place' => $faker->text(15),
        'points' => $faker->numberBetween(10,99),
    ];
});
