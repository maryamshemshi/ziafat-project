<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TicketMessageTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function authenticated_user_can_submit_a_ticket()
    {
        $user = User::factory()->create();

        $this->actingAs($user)
            ->post(route('tickets.store'), [
                'subject' => 'مشکل در ثبت نام',
                'text'    => 'وقتی می‌خوام ثبت نام کنم، صفحه رفرش می‌شه و خطا نمی‌ده.',
            ])
            ->assertRedirect(route('account'))
            ->assertSessionHas('success');

        $this->assertDatabaseHas('tickets', [
            'user_id' => $user->id,
            'subject' => 'مشکل در ثبت نام',
        ]);

        $this->assertDatabaseHas('ticket_messages', [
            'user_id'    => $user->id,
            'message'    => 'وقتی می‌خوام ثبت نام کنم، صفحه رفرش می‌شه و خطا نمی‌ده.',
            'is_support' => false,
        ]);
    }
}
