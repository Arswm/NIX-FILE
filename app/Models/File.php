<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $casts =[
      'link'
    ];

    public function getLinkAttribute()
    {
       return route('file.dl',$this->id);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
