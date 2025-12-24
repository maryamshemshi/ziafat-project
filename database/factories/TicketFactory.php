<?php

namespace Database\Factories;

use App\Enums\TicketStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

class TicketFactory extends Factory
{
    public function definition(): array
    {
        return [
            'ticket_number' => 'TKT-' . now()->format('ymd') . '-' . str_pad(mt_rand(1, 99999), 5, '0', STR_PAD_LEFT),
            'user_id'       => \App\Models\User::factory(),
            'subject'       => $this->faker->sentence(6),
            'text'          => $this->faker->paragraph(),
            'status'        => TicketStatus::Pending,
            'ip_address'    => $this->faker->ipv4(),
        ];
    }
}
