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
        $ticketData = $request->validated();

        $ticket = auth()->user()->tickets()->create($ticketData);

        $ticket->messages()->create([
            'user_id'    => auth()->id(),
            'message'    => $ticketData['text'],
            'is_support' => false,
        ]);

        return redirect()->route('account')
            ->with('success', 'درخواست شما ثبت شد. شماره: ' . $ticket->ticket_number)
            ->with('openTab', 'requests');
    }

}
