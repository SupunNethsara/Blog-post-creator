<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $table ='posts';
    protected $fillable = ['post_title' , 'post_content'];
}
