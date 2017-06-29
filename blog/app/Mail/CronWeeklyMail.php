<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Crypt;

class CronWeeklyMail extends Mailable
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
       
        return $this->view('cron_weekly_mail',['details' => $details])->subject('Weekly Notification-Startupsclub ('.date('d-m-Y', strtotime("-1 week")).' to '.date('d-m-Y', strtotime("now")).')');
    }
}
