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

$factory->define(App\Product::class, function (Faker\Generator $faker) {
    $faker = Faker\Factory::create('fr_FR');
    /*
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
    */
    return [
        'title' => $faker->sentence(3),//($nb = 3, $asText = false)
        'description' => $faker->realtext(),
        'price' => $faker->randomfloat(2, 0, 1000),//randomFloat($nbMaxDecimals = NULL(ici2), $min = 0, $max = NULL)
        'brand' => $faker->word(),
    ];
});

$factory->define(App\Categorie::class, function (Faker\Generator $faker) {
    $faker = Faker\Factory::create('fr_FR');
    /*

    */
    $targetDir = public_path().'/upload/categories';
    $nameImage = $targetDir.'/'.str_random(15).'.jpg';

    copy('http://lorempixel.com/350/270/fashion/Faker', $nameImage);

    return [
        'name' => $faker->sentence(2),//($nb = 3, $asText = false)
        'description' => $faker->realtext(),
        //'image' => $faker->imageUrl($width=357, $height=515, 'cats', true, 'Faker'),
        //'image' => $faker->file(storage_path().'/fakerImageCategorie', $targetDir, false),
        'image' => $nameImage,
        'position' =>$faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 20),
    ];
});
