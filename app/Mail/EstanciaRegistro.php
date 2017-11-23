<?php

namespace App\Mail;

use App\Models\Estancia;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EstanciaRegistro extends Mailable
{
    use Queueable, SerializesModels;

    public $estancia;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Estancia $estancia)
    {
        $this->estancia = $estancia;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->text('emails.estancia');
    }
}
