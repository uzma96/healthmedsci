<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 7/25/2018
 * Time: 10:18 AM
 */

namespace App\Mail;


use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewAccountNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $subject;
    protected $user;


    public function __construct($subject, $user)
    {
        $this->subject = $subject;
        $this->user = $user;
    }

    public function build()
    {
        return $this->subject($this->subject)
            ->markdown('emails.new_account_notification')
            ->with(['user' => $this->user]);
    }

}