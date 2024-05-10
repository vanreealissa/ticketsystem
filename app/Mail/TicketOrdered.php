<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Ticket;
use App\Models\Concert;

class TicketOrdered extends Mailable
{
    use Queueable, SerializesModels;

    public $ticket;
    public $concert;

    public function __construct(Ticket $ticket, Concert $concert)
    {
        $this->ticket = $ticket;
        $this->concert = $concert;
    }

    public function build()
{
    return $this->view('emails.ticket')->with([
        'from' => 'vanreealissa@gmail.com',
        'to' => $this->ticket->email,
        'subject' => 'Your ticket from Van Ree Aliissa',
        'name' => $this->ticket->name,
        'email' => $this->ticket->email,
        'concert' => $this->concert,
    ]);
}

}
