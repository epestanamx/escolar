<?php

namespace App\Mail;

use App\Models\CartaPresentacion;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CartaPresentacionCreacion extends Mailable
{
    use Queueable, SerializesModels;

    public $carta;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( CartaPresentacion $carta)
    {
        $this->carta = $carta;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->text('emails.carta-presentacion');
    }
}
