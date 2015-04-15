<?php namespace Motty\Logbook\Entities;

use Illuminate\Database\Eloquent\Model;

class Aircraft extends Model
{
    /**
     * The database table used by the model
     *
     * @var string
     */
    protected $table = 'aircrafts';

    /**
     * The attributes that are mass assignable
     *
     * @var array
     */
    protected $fillable = [
        'type',
        'engine_type',
        'registration_number'
    ];
}
