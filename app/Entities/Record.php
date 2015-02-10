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
        'start_time',
        'stop_time',
        'pilot_in_command',
        'num_landings',
        'num_dec_landings',
        'num_instrumental_approach'
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
     */
    public function setNumLandingsAttribute($numLandings)
    {
        $this->attributes['num_landings'] = (int) $numLandings ?: 0;
    }

    /**
     * The attribute that should be always an integer
     *
     * @param $numDecLandings
     */
    public function setNumDecLandingsAttribute($numDecLandings)
    {
        $this->attributes['num_dec_landings'] = (int) $numDecLandings ?: 0;
    }

    /**
     * The attribute that should be always an integer
     *
     * @param $numInstrumentalApproach
     */
    public function setNumInstrumentalApproachAttribute($numInstrumentalApproach)
    {
        $this->attributes['num_instrumental_approach'] = (int) $numInstrumentalApproach ?: 0;
    }
}