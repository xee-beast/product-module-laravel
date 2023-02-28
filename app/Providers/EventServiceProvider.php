<?php

namespace App\Providers;

use App\Events\ApplicationFormStatusChanged;
use App\Events\ApplicationSubmitted;
use App\Events\ApplicationTimeLine;
use App\Events\UserSelfRegistered;
use App\Listeners\ApplicationPostSubmissionActivity;
use App\Listeners\RecordApplicationTimeLine;
use App\Listeners\SendApplicationFormStatusNotification;
use App\Listeners\SendApplicationSubmittedNotification;
use App\Listeners\SendUserRegisteredNotification;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use function Illuminate\Events\queueable;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [

    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
}
