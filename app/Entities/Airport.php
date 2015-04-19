<?php namespace Motty\Logbook\Entities;

use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    /**
     * The database table used by the model
     *
     * @var string
     */
    protected $table = 'airports';

    /**
     * The attributes that are mass assignable
     *
     * @var array
     */
    protected $fillable = [
        'acronym',

        /*
         * User foreign key
         */
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo('Motty\Logbook\Entities\User');
    }

    public function record()
    {
        return $this->belongsTo('Motty\Logbook\Entities\Record');
    }
}
