<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'postTitle',
        'authorId',
        'postText'
    ];

    protected $dateFormat = 'd-m-Y';


    public function getAuthor()
    {
        return $this->hasOne(User::class, 'id', 'authorId');
    }

    public function getComments()
    {
        return $this->hasMany(Comment::class, 'postId', 'id');
    }

    protected function casts(): array
    {
        return [
            'created_at' => 'date',
        ];
    }
}
