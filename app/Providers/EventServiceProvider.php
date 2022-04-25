<?php

namespace App\Providers;

use App\Listeners\SendRegisterNotification;
use App\Models\User;
use App\Observers\UserObserver;
use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        \App\Events\RegisterNotification::class => [
            \App\Listeners\SendRegisterNotification::class,
        ],
        \App\Events\OrderPlaceNotification::class => [
            \App\Listeners\SendOrderPlaceNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //Register observer
        User::observe(UserObserver::class);
    }
}
