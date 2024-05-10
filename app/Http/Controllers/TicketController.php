<?php

namespace App\Http\Controllers;

use App\Mail\TicketOrdered;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Concert;

class TicketController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'concert_id' => 'required|exists:concert,id',
        ]);

        $ticket = Ticket::create([
            'concert_id' => $request->concert_id,
            'name' => $request->name,
            'email' => $request->email,
        ]);

        $concert = Concert::find($request->concert_id);

        Mail::to($request->email)->send(new TicketOrdered($ticket, $concert));

        return redirect()->route('home')->with('success', 'Jouw ticket komt eraan.');
    }
}
