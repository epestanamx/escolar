<?php

namespace App\Mail;

use App\Models\Alumno;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AlumnoActivacion extends Mailable
{
    use Queueable, SerializesModels;

    public $alumno;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Alumno $alumno)
    {
        $this->alumno = $alumno;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->text('emails.welcome');
    }
}
