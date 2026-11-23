<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $username;
    public $email;
    public $content;

    public function __construct($new_username, $new_email, $new_content)
    {
        $this->username = $new_username;
        $this->email = $new_email;
        $this->content = $new_content;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: "Nuovo messaggio dal form contatti",
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'mail.mail-body',
        );
    }
    public function attachments(): array
    {
        return [];
    }
}
