<?php

use Faker\Generator as Faker;
use Modules\Article\Entities\Content;

$factory->define(Content::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(3),
        'author' => 'mike',
        'content' => $faker->text(),
        'thumb' => $faker->imageUrl(300, 300),
        'click' => mt_rand(1, 1111),
        'category_id' => mt_rand(1, 4),
        'istop' => 0


    ];
});
