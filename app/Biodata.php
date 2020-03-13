<?php


namespace App;


use Illuminate\Database\Eloquent\Model;


class Biodata extends Model

{

    /**

     * The attributes that are mass assignable.

     *	

     * @var array

     */

    protected $fillable = [

        'name', 'age', 'address', 'place_of_birth', 'birth_date', 'parents', 'gender'

    ];

}