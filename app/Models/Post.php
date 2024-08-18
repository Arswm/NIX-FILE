<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  use HasFactory;

  protected $fillable = [
    'user_id', // Author of the post
    'title', // Post title
    'description', // Main content of the post (kept as 'description')
    'slug', // URL-friendly slug
    'published_at', // Date and time when the post was published
    'modified_at', // Date and time when the post was last modified
  ];

  protected $casts = [
    'published_at' => 'datetime',
    'modified_at' => 'datetime',
  ];

  // Relationship with User (Author)
  public function author()
  {
    return $this->belongsTo(User::class, 'user_id');
  }
}
