<?php

namespace App;

use App\Models\ReviewerProfile;
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
//    protected $fillable = [
//        'name', 'email', 'password', 'role', 'status', 'activation_code',
//    ];

    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function reviewer_profile()
    {
        return $this->hasOne(ReviewerProfile::class,'user_id','id');
    }

    public function getFullNameAttribute()
    {
        return $this->salutation.' '.$this->first_name.' '.$this->last_name;
    }
}
