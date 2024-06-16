<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LikeComment extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'comment_id',
        'like_type_id',
    ];

    public function comment(){
        return $this->belongsTo(Comment::class);
    }

}
