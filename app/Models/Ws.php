<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Hero extends Model {

    protected $table = "ws";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}