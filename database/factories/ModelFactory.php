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
$factory->define(blog\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];

});

$factory->define(blog\Posts::class,
    function(Faker\Generator $faker){

    return[
        'titulo'=>$faker->sentence,
        'conteudo'=>$faker->paragraph,
    ];
});

$factory->define(blog\Comentarios::class, function(Faker\Generator $faker){
    return[
        'post_id'=>3,
        'nome'=>$faker->word,
        'email'=>$faker->email,
        'comentario'=>$faker->paragraph,
    ];
});

$factory->define(blog\Tags::class, function(Faker\Generator $faker){
    return[
        'nome'=>$faker->word,
    ];
});

$factory->state(blog\User::class, 'admin', function (Faker\Generator $faker) { # criar esta factory
    return[
        'role'=>blog\User::ROLE_ADMIN
    ];
});

$factory->state(blog\User::class, 'usuario', function (Faker\Generator $faker) { # criar esta factory
    return[
        'role'=>blog\User::ROLE_USER
    ];
});

