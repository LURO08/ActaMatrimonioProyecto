<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request; // Importa la clase Request adecuadamente
use PDF;

class InvitacionMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $request;
    public $pdfContent;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $request, $pdfContent)
    {
        $this->request = $request;
        $this->pdfContent = $pdfContent;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('romeropalaciosjosluis8@gmail.com', 'Jose Luis Romero')
                    ->subject('Invitacion a la boda')
                    ->view('emails.invitacion', [
                        'novio' => $this->request->novio,
                        'novia' => $this->request->novia,
                        'lugar' => $this->request->lugar,
                        'fecha' => $this->request->dia . ' de ' . $this->request->mes,
                        'hora' => $this->request->hora,
                    ])
                    ->attachData($this->pdfContent, 'invitacion.pdf', [
                        'mime' => 'application/pdf',
                    ]);
    }
}
