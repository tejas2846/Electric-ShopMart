<?php

namespace App\Listeners;

use App\Events\RegisterNotification;
use App\Jobs\SendRegisterMailNotification;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendRegisterNotification
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
     * @param  \App\Events\RegisterNotification  $event
     * @return void
     */
    public function handle(RegisterNotification $event)
    {
        //dd($event->user);
        $job = (new SendRegisterMailNotification($event->user));



dispatch($job); 
       // dispatch(new SendRegisterMailNotification($event->user));
        //
       // dd($event->user);
       // $to_name='Tejas Prajapati';
    //    $to_mail=$event->user->email;
    //    $to_name=$event->user->name;
    //    //dd(response()->json($event->user->email));
    //    $email=$event->user->email;
    //    $password=$event->user->password;
       
    //    $data=array('name'=>'Electric Mart','body'=>$event->user);
    //    Mail::send('mail',$data,function($message) use($to_name,$to_mail){
    //    $message->to($to_mail)
    //    ->subject('Success !! You are Register');
    //    });

    }
}
