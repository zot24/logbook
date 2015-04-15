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
        'acronym'
    ];
}
