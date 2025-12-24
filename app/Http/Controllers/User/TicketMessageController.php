<?php

namespace App\Http\Controllers\User;

use App\Enums\TicketStatus;
use App\Http\Controllers\Controller;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class TicketMessageController extends Controller
{
    public function store(Request $request, Ticket $ticket): RedirectResponse
    {
        $request->validate([
            'message' => 'required|string|max:2000',
        ]);

        if ($ticket->user_id !== auth()->id()) {
            abort(403, 'این تیکت متعلق به شما نیست.');
        }

        $ticket->messages()->create([
            'user_id' => auth()->id(),
            'message' => $request->message,
            'is_support' => false,
        ]);

        $ticket->update(['status' => TicketStatus::Pending]);

        return back()->with('success', 'پاسخ شما ثبت شد و تیکت در حال بررسی است.');
    }
}
