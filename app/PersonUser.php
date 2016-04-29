<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonUser extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'person_user';
    
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'person_id',
        'user_id',
    ];

    public function person()
    {
        return $this->belongsTo('App\Person');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
