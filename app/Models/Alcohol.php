<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

/**
 * Created by PhpStorm.
 * User: Nico
 * Date: 09/05/2017
 * Time: 14:30
 */
class Alcohol extends Model
{
    protected $table = 'alcohol';

    public function bundles()
    {
        return $this->belongsToMany('App\Models\Bundles');
    }
}