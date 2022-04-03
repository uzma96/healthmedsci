<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 7/25/2018
 * Time: 12:43 AM
 */

namespace App\Mail;


use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class JournalModifiedToAdmin extends Mailable
{
    use Queueable, SerializesModels;

    protected $url;
    public $subject;


    public function __construct($url,$subject)
    {
        $this->url = $url;
        $this->subject = $subject;
    }

    public function build()
    {
        return $this->subject($this->subject)
            ->markdown('emails.journal_modified_to_admin')
            ->with(['url'=>$this->url]);
    }
}