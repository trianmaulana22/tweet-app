<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // ディレクトリがなければ作成する
        if (!Storage::exists('public/app/images')) {
            Storage::makeDirectory('public/app/images');
        }
        return [
            'name' => $this->faker->image(storage_path('app/public/images'), 640, 480, null, false)
        ];
    }
}