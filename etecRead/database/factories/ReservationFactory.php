<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Book;

class ReservationFactory extends Factory
{
    protected $model = \App\Models\Reservation::class;

    public function definition()
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id, // usa usuário existente
            'book_id' => Book::inRandomOrder()->first()->id, // usa livro existente
            'status' => 'pendente',
            'reserved_at' => $this->faker->dateTimeBetween('-1 month', 'now'),
        ];
    }
}
