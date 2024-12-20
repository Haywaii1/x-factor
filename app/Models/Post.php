<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Comment;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'author',
        'title',
        'category',
        'description',
        'image',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(user::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
