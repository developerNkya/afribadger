<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactRequestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contactRequest;

    public function __construct($contactRequest)
    {
        $this->contactRequest = $contactRequest;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Contact Request from ' . $this->contactRequest->name,
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'mails.contact_request',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
