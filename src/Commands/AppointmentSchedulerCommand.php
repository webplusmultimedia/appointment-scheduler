<?php

namespace WebplusMultimedia\AppointmentScheduler\Commands;

use Illuminate\Console\Command;

class AppointmentSchedulerCommand extends Command
{
    public $signature = 'appointment-scheduler';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
