<?php namespace Motty\Logbook\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    /**
     * The database table used by the model
     *
     * @var string
     */
    protected $table = 'records';

    /**
     * The attributes that are mass assignable
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'start_time',
        'stop_time',
        'pilot_in_command',
        'aircraft',
        'aircraft_registration',
        'aircraft_engine_type',
        'departure_airport',
        'arrive_airport',
        'num_landings',
        'num_dec_landings',
        'num_instrumental_approach',
        'cross_country',
        'night_hours',
        'instrumental_hours'
    ];

    /**
     * The attributes that are treat as Carbon instances
     *
     * @var array
     */
    protected $dates = [
        'start_time',
        'stop_time'
    ];

    public function user()
    {
        return $this->belongsTo('Motty\Logbook\Entities\User');
    }

    /**
     * The attribute that should be always a formatted string date
     *
     * @param $startTime
     * @return string
     */
    public function getStartTimeAttribute($startTime)
    {
        return Carbon::parse($startTime)->format('Y-m-d');
    }

    /**
     * The attribute that should be always a formatted string date
     *
     * @param $stopTime
     * @return string
     */
    public function getStopTimeAttribute($stopTime)
    {
        return Carbon::parse($stopTime)->format('Y-m-d');
    }

    /**
     * The attribute that should be always an integer
     *
     * @param $numLandings
     * @return int
     */
    public function getNumLandingsAttribute($numLandings)
    {
        return (int) $numLandings ?: 0;
    }

    /**
     * The attribute that should be always an integer
     *
     * @param $numDecLandings
     * @return int
     */
    public function getNumDecLandingsAttribute($numDecLandings)
    {
        return (int) $numDecLandings ?: 0;
    }

    /**
     * The attribute that should be always an integer
     *
     * @param $numInstrumentalApproach
     * @return int
     */
    public function getNumInstrumentalApproachAttribute($numInstrumentalApproach)
    {
        return (int) $numInstrumentalApproach ?: 0;
    }

    /**
     * The attribute that should be always an integer
     *
     * @param $crossCountry
     * @return int
     */
    public function getCrossCountryAttribute($crossCountry)
    {
        return (int) $crossCountry ?: 0;
    }

    /**
     * The attribute that should be always an integer
     *
     * @param $nightHours
     * @return int
     */
    public function getNightHoursAttribute($nightHours)
    {
        return (int) $nightHours ?: 0;
    }

    /**
     * The attribute that should be always an integer
     *
     * @param $instrumentalHours
     * @return int
     */
    public function getInstrumentalHoursAttribute($instrumentalHours)
    {
        return (int) $instrumentalHours ?: 0;
    }
}
