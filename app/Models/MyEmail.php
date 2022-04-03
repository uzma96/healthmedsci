<?php

namespace App\Models;


use App\User;
use Illuminate\Database\Eloquent\Model;

class MyEmail extends Model
{
    protected $table = 'emails';
    protected $guarded = [];

    public function sender()
    {
        return $this->hasOne(User::class,'id','sender_id');
    }

    public function receiver()
    {
        return $this->hasOne(User::class,'id','receiver_id');
    }
}