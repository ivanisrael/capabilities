<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'roles';
    
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
    ];

    public function userRoles()
    {
        return $this->hasMany('App\UserRole');
    }

    public function rolePermissions()
    {
        return $this->hasMany('App\UserRole');
    }

}
