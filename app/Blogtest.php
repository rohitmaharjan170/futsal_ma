<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blogtest extends Model
{
    //use HasFactory;

    protected $table = 'tbl_blogs';
    public $timestamps = true;
    protected $primaryKey = 'blog_id';
    
    protected $fillable = [
        'blog_title',
        'blog_short_description',
        'blog_description'
    ];


    
}
