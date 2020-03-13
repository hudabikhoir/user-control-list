<?php


namespace App;


use Illuminate\Database\Eloquent\Model;


class Chronology extends Model

{

    /**

     * The attributes that are mass assignable.

     *	

     * @var array

     */
    protected $table = 'chronologies';

    protected $fillable = [

        'status_id', 'cronology'

    ];

}