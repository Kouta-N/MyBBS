<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//Post -> posts に紐づける
class Post extends Model
{
    use HasFactory;

    protected $fillable =[
        'title',
        'body',
    ];

    //$post->comments
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}