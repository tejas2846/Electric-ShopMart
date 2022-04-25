<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class SendOrderPlaceMailNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
         
    public $user,$data;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($user,$data)
    {
        //
        $this->user=$user;
        $this->data=$data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        $to_mail=$this->user->email;
        $to_name=$this->user->name;
        $var=array('name'=>'Electric Mart','body'=>$this->data);
        Mail::send('orderPlaceMail',$var,function($message) use($to_name,$to_mail){
        $message->to($to_mail)
        ->subject('Success !! You are Register');
        });
    }
}
