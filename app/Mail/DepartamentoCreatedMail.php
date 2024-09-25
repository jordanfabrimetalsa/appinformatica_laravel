<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Queue\SerializesModels;

class DepartamentoCreatedMail extends Mailable
{
    use Queueable, SerializesModels;

    public $departamento;
 
    public function __construct($departamento)
    {
        $this->departamento = $departamento;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            //from: new Address('vvasquez@fabrimetal.cl', 'Jefe de Informatica'),
            replyTo: [
                new Address('vvasquez@fabrimetal.cl', 'Jefe de Informatica'),
            ],
            subject: 'Se ha registrado un nuevo Departamento',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.created',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
