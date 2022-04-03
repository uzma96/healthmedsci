<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewPublicationToAdmin extends Mailable
{
    use Queueable, SerializesModels;

    
    public $subject;
    protected $url;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subject,$url)
    {
        $this->subject = $subject;
        $this->url = $url;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->subject)
            ->markdown('emails.new_publication_to_admin')
            ->with(['url'=>$this->url]);
    }
}
