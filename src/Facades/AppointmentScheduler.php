<?php

namespace WebplusMultimedia\AppointmentScheduler\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \WebplusMultimedia\AppointmentScheduler\AppointmentScheduler
 */
class AppointmentScheduler extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \WebplusMultimedia\AppointmentScheduler\AppointmentScheduler::class;
    }
}
