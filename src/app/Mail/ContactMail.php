<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /** @var array $contactForm */
    protected $contactForm;

    /**
     * Create a new message instance.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->contactForm = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.contact-me')
            ->subject('Contact Request: ' . $this->contactForm['con_name'])
            ->with([
                'name' => $this->contactForm['con_name'],
                'email' => $this->contactForm['con_email'],
                'message' => $this->contactForm['con_message']
            ]);
    }
}
