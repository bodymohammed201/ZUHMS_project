<?php

namespace Database\Factories;

use App\Models\Section;
use Illuminate\Database\Eloquent\Factories\Factory;

class SectionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Section::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'name' => $this->faker->unique()->randomElement(['Nephrology ', 'Oncolorogy ', 'pediatric ', 'Internal Medicine  ', 'Cardiology ', 'Surgery ', 'Obstetrics & Gynaecology']),
            'description' => $this->faker->paragraph
        ];
    }
}
