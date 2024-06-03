<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'body',
    ];

    /**
     * Get the owning commentable model (product or post).
     */
    public function commentable()
    {
        return $this->morphTo();
    }
}
