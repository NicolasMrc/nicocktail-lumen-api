<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

/**
 * Created by PhpStorm.
 * User: Nico
 * Date: 09/05/2017
 * Time: 14:30
 */
class Bundle extends Model
{
    protected $table = 'bundle';

    public function softs()
    {
        return $this->belongsToMany('App\Models\Soft');
    }

    public function alcohols()
    {
        return $this->belongsToMany('App\Models\Alcohol');
    }

}