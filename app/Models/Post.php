<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //Table Name
    protected $table = 'posts';
    // primary key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamp = true;
}
 