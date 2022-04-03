<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 7/6/2018
 * Time: 11:50 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class JournalAuthor extends Model
{
    protected $guarded = [];
    protected $table = 'journal_author';
    
    protected $fill=['journal_id','salutation','first_name','last_name',  'affiliation','country','correspondent_author','email','tel','orcid_id'  ];
}