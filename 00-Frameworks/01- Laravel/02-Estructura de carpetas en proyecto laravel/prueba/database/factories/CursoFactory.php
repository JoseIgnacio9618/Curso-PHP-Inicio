<?php

namespace Database\Factories;

use App\Models\curso;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model= curso::class;

    public function definition()
    {

        $name=$this->faker->sentence();
        return [
            'name'=> $name,
            'slug'=> Str::slug($name,'-'),
            'description'=> $this->faker->paragraph(),
            'email'=> $this->faker->sentence(),
            
            'categoria'=> $this->faker->randomElement(["framework","Lenguaje","Otra cosa"]),
            'password'=> $this->faker->sentence(),
            'remember_token'=> $this->faker->sentence()
        
            
        ];
    }
}
