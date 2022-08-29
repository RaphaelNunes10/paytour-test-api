<?php

namespace Database\Factories;

use Faker;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Curriculum;


class CurriculumFactory extends Factory
{
    
    protected $model = Curriculum::class;
    
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = Faker\Factory::create('pt_BR');

        return [
            'ip' => $faker->ipv4(),
            'nome' => $faker->name(),
            'email' => $faker->unique()->safeEmail(),
            'telefone' => $faker->numerify('(##) # ####-####'),
            'cargo' => $faker->jobTitle(),
            'escolaridade' => $faker->randomElement($array = array ("Fundamental","Médio","Superior","Pós-graduado","Mestrado","Doutorado")),
            'obs' => $faker->realText(),
            'arquivo' => json_encode(["nome" => "teste.pdf", "base64" => "TWFueSBoYW5kcyBtYWtlIGxpZ2h0IHdvcmsu", "mime" => 'application/pdf']),
        ];
    }
}
