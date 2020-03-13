<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    /**
     * The attributes that are mass assignable.
     *	
     * @var array
     */
    protected $table = 'status';

    protected $fillable = [
        'input_id', 'date_of_arrest', 'place_of_arrest', 'status', 'placement'
    ];
}