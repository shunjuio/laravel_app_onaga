<?php

namespace App\Listeners;

use App\Person;
use Illuminate\Support\Facades\Storage;
use App\Events\PersonEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class PersonEventListener implements shouldQueue
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
     * @param  PersonEvent  $event
     * @return void
     */
    public function handle(PersonEvent $event)
    {
        Storage::append('person_access_log.txt',
            '[PersonEvent] ' . now() . ' ' .
                $event->person->name_and_age);
    }
}
