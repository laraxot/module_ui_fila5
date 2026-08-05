<?php

declare(strict_types=1);

namespace Modules\UI\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as BaseEventServiceProvider;

class EventServiceProvider extends BaseEventServiceProvider
{
    /**
     * The event handler mappings for the application.
     *
     * @var array<string, array<int, string>>
     */
    protected $listen = [];

    /**
     * Indicates if events should be discovered.
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
     *
     * @var bool
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
     */
    protected static $shouldDiscoverEvents = true;

    /**
     * Configure the proper event listeners for email verification.
     */
<<<<<<< HEAD
    protected function configureEmailVerification(): void
    {
    }
=======
<<<<<<< HEAD
    protected function configureEmailVerification(): void
    {
    }
=======
    protected function configureEmailVerification(): void {}
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
}
