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
$factory->define(App\Models\Banco::class, function (Faker\Generator $faker) {
    return [
        'nombre' => $faker->name
    ];
    //factory(App\Models\Banco::class,50)->create()
});
$factory->define(App\Models\RazonSocial::class, function (Faker\Generator $faker) {
    return [
        'prefijo'=> str_random(2),
        'descripcion'=> $faker->name
    ];
});
$factory->define(App\Models\Cliente::class, function (Faker\Generator $faker) {
    return [
        'nombre'=>$faker->sentence,
        'telefono'=>$faker->phone,
        'domicilio'=>$faker->sentence,
        'RazonSocial_id'=>function(){
            return factory(App\Models\RazonSocial::class)->create()->id;
        }
    ];
});
