<?php

namespace Fleetbase\Mail;

use Illuminate\Support\Facades\Log;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class InvitationMail extends Mailable
{
    use Queueable;
    use SerializesModels;


    public $company_name;
    public $user_name;
    public $url;
    public $Code;
    public $subject;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($company_name,$subject,$user_name,$url,$Code)
    {
        $this->company_name = $company_name;
        $this->user_name = $user_name;
        $this->url = $url;
        $this->Code = $Code;
        $this->subject = $subject;
    }

    /**
     * Get the message content definition.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->subject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'fleetbase::mail.invitation',
        );
    }
}
