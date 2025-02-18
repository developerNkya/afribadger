<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $booking;

    public function __construct($booking)
    {
        $this->booking = $booking;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Tour Booking - ' . $this->booking->tour_name, // Include tour name in subject
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'mails.booking_confirmation',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
