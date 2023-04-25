<?php

namespace App\Console;

use App\Jobs\Myjob;
use App\Person;
use Illuminate\Support\Facades\Storage;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class ScheduleObj
{
    private $person;

    public function __construct($id)
    {
        $this->person = Person::find($id);
    }

    public function __invoke()
    {
        Storage::append('person_access_log.txt',
            $this->person->name_and_age);
        Myjob::dispatch($this->person);
        return 'true';
    }
}
