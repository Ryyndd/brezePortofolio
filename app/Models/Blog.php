<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;
    use SoftDeletes; // Menggunakan trait SoftDeletes

    protected $fillable = [
        'blog_image',
        'blog_title',
        'blog_slug',
        'blog_content',
        'user_id',
        'blog_status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
