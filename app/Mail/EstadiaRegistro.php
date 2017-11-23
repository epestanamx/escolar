<?php

namespace App\Mail;

use App\Models\Estadias;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EstadiaRegistro extends Mailable
{
    use Queueable, SerializesModels;

    public $estadia;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Estadias $estadia)
    {
        $this->estadia = $estadia;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->text('emails.estadia');
    }
}
