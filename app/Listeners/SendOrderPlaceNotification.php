<?php

namespace App\Listeners;

use App\Events\OrderPlaceNotification;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Jobs\SendOrderPlaceMailNotification;

class SendOrderPlaceNotification
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
     * @param  \App\Events\OrderPlaceNotification  $event
     * @return void
     */
    public function handle(OrderPlaceNotification $event)
    {
        //
        
        $job = (new SendOrderPlaceMailNotification($event->user,$event->data));
        dispatch($job); 
    }
}
