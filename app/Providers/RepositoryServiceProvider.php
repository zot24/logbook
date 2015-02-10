<?php namespace Motty\Logbook\Providers;

use Illuminate\Support\ServiceProvider;
use Motty\Logbook\Entities\Record;
use Motty\Logbook\Repositories\Record\EloquentRecordRepository;
use Motty\Logbook\Repositories\Record\RecordRepositoryInterface;

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
}
