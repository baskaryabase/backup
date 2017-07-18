<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Crypt;

class ForgotPassword extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($event)
    {
        $this->event = $event;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $details=$this->event;
      $encrypted = Crypt::encrypt('id');
  
      $encrypted1 = Crypt::encrypt($details['id']);
        
      $encrypted2 = Crypt::encrypt('date');
     
       $encrypted3 = Crypt::encrypt(date("Y-m-d H:i:s"));
     
    
     $details['url'] = 'http://members.startupsclub.org/reset-password/?'.$encrypted.'='.$encrypted1.'&'.$encrypted2.'='.$encrypted3;
        
        return $this->view('forgot_email',['details' => $details]);
    }
}
