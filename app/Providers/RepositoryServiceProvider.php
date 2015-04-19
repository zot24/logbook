<?php namespace Motty\Logbook\Providers;

use Motty\Logbook\Entities\Record;
use Motty\Logbook\Repositories\Aircraft\AircraftRepositoryInterface;
use Motty\Logbook\Repositories\Aircraft\EloquentAircraftRepository;
use Motty\Logbook\Repositories\Record\RecordRepositoryInterface;
use Motty\Logbook\Repositories\Record\EloquentRecordRepository;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerRecordRepository();
        $this->registerAircraftRepository();

    }

    /**
     * Register Record Repository
     */
    public function registerRecordRepository()
    {
        $this->app->bind(RecordRepositoryInterface::class, function () {
            return new EloquentRecordRepository(new Record);
        });
    }

    /**
     * Register Aircraft Repository
     */
    public function registerAircraftRepository()
    {
        $this->app->bind(AircraftRepositoryInterface::class, function () {
            return new EloquentAircraftRepository(new Record);
        });
    }
}
