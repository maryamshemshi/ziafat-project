<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Ticket;

class AccountController extends Controller
{
    public function index()
    {
        $tickets = Ticket::where('user_id', auth()->id())
            ->latest()
            ->paginate(5);

        return view('layouts.account', compact('tickets'));
    }
}
