<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'persons';
    
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'middle_name',
        'email',
        'birthdate',
        'street_address',
        'city',
        'province',
        'country',
        'zipcode',
        'religion',
        'gender',
        'mobile',
        'phone',
    ];

    public function userRole()
    {
        return $this->hasOne('App\UserRole');
    }

}
