<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nivel extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'nivel';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'subnivel_id', 'nivelAtributos_id'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [];

}