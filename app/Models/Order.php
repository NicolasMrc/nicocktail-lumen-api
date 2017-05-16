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
    protected $with = ['bundles'];
    protected $fillable = ['billing_road', 'billing_city', 'billing_country', 'billing_province', 'billing_zipcode'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function bundles()
    {
        return $this->belongsToMany('App\Models\Bundle');
    }
}