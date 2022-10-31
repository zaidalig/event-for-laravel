<?php

namespace App\Listeners;

use App\Events\SendMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
class SendMailFired
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\=SendMail  $event
     * @return void
     */
    public function handle(SendMail $event)
    {
        $user=User::find($event->userid)->toArray();
        Mail::send('eventMail',$user,function($message) use ($user){
$message->to($user['email']);
$message->subject("event testing");

        });

    }
}
