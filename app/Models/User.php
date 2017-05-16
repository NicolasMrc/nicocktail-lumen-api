<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

/**
 * Created by PhpStorm.
 * User: Nico
 * Date: 09/05/2017
 * Time: 14:30
 */
class User extends Model
{
    protected $table = 'user';
    protected $with = array('cart', 'wishlist', 'address');

    protected $hidden = ['password'];

    public function cart()
    {
        return $this->belongsToMany('App\Models\Bundle', 'cart');
    }

    public function wishlist()
    {
        return $this->belongsToMany('App\Models\Bundle', 'wishlist');
    }

    public function address()
    {
        return $this->hasOne('App\Models\Address');
    }
}