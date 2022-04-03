<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 7/6/2018
 * Time: 11:51 PM
 */

namespace App\Models;


use App\User;
use Illuminate\Database\Eloquent\Model;

class JournalReview extends Model
{
    protected $table = 'journal_review';
    protected $guarded = [];

    public function reviewer()
    {
        return $this->hasOne(User::class,'id','reviewer_id');
    }

//    public function
}