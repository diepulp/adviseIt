<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PlanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'fall' => 'sdev378, sdev455',
            'winter' => 'sdev67, sdev305',
            'spring' => 'sdev123, sdev455',
            'summer' => 'rest',
            'token' => Str::random(6)
        ];
    }
}
