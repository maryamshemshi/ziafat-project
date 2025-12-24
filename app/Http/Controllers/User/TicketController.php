<?php

namespace App\Http\Controllers\User;

use App\Enums\TicketStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTicketRequest;
use App\Models\Ticket;
use Illuminate\Http\RedirectResponse;

class TicketController extends Controller
{
    public function index()
    {
        $ticket = Ticket::where('user_id', auth()->id())->latest()->get();
        return redirect()->route('account', ['tab' => 'requests'])
            ->with('success', 'درخواست شما ثبت شد. شماره: ' . $ticket->ticket_number);
    }


    public function store(StoreTicketRequest $request): RedirectResponse
    {
        $ticketNumber = 'TKT-' . now()->format('ymd') . '-' . str_pad(Ticket::count() + 1, 5, '0', STR_PAD_LEFT);

        $ticket = auth()->user()->tickets()->create([
            'ticket_number' => $ticketNumber,
            'subject' => $request->subject,
            'text' => $request->text,
            'status' => TicketStatus::Pending,
            'ip_address' => $request->ip(),
        ]);

        $ticket->messages()->create([
            'user_id' => auth()->id(),
            'message' => $request->text,
            'is_support' => false,
        ]);

        return redirect()->route('account')
            ->with('success', 'درخواست شما ثبت شد. شماره: ' . $ticket->ticket_number)
            ->with('openTab', 'requests');
    }

}
