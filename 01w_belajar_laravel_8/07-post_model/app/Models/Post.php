<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'excerpt', 'body']; // boleh diisi, sisanya tidak boleh
    protected $guarded = ['id']; // tidak boleh diisi, sisanya boleh
}
