<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;
        public $name;

     public function __construct($name)
     {
         $this->name = $name;
     }


    public function build() {
       $subject = 'Hi, Welcome to Unilag Artisans.';
       return $this->subject($subject)->view('emails.welcome-mail');
    }

}
