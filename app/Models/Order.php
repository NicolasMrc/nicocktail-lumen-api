<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

/**
 * Created by PhpStorm.
 * User: Nico
 * Date: 09/05/2017
 * Time: 14:30
 */
class Order extends Model
{
    protected $table = 'order';
    protected $with = array('billingAddress', 'shippingAddress');

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function shippingAddress()
    {
        return $this->hasOne('App\Models\Address');
    }

    public function billingAddress()
    {
        return $this->hasOne('App\Models\Address');
    }


}