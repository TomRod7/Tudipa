<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'lastname', 'dateB', 'country', 'province',  'email', 'password'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // productos creados por el usuario
    public function productsCreated() {
      return $this->hasMany(Product::class);
    }

    // productos comprados por el usuario
    public function productsBought() {
      return $this->belongsToMany(Product::class, 'users_products');
    }

}
