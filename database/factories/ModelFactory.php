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
$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    $userName = $faker->userName;

    return [
        'name' => $faker->name,
        'lastname' => $faker->lastName,
        'username' => $userName,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt($userName),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Organization::class, function (Faker\Generator $faker) {
    $userName = $faker->userName;

    return [
        'name' => $faker->name,
        'username' => $userName,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt($userName),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Business::class, function (Faker\Generator $faker) {
    $userName = $faker->userName;

    return [
        'name' => $faker->name,
        'username' => $userName,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt($userName),
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
        'business_id' => $faker->numberBetween(1,20),
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
        'organization_id' => $faker->numberBetween(1,15),
    ];
});
