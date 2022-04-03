<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    protected $guarded = [];

    public function authors()
    {
        return $this->hasMany(JournalAuthor::class,'journal_id','journal_id');
    }

    public function documents()
    {
        return $this->hasMany(JournalDetails::class,'journal_id','journal_id');
    }

    public function main_author()
    {
        return $this->hasOne(User::class,'id','user_id');
    }

    public function reviewer()
    {
        return $this->hasMany(JournalReview::class,'journal_id','journal_id');
    }

    public function getAlreadyReviewedAttribute()
    {
        if(!isset($this->reviewer[0]))
            return false;
        if($this->reviewer[0]->status > 1){
            return true;
        }
        return false;
    }
}
