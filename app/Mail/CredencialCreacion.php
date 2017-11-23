<?php

namespace App\Mail;

use App\Models\Credencial;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CredencialCreacion extends Mailable
{
    use Queueable, SerializesModels;

    public $credencial;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Credencial $credencial)
    {
        $this->credencial = $credencial;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->text('emails.credencial');
    }
}
