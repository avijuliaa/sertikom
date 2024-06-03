<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'price',
    ];


    /**
     * Get all of the comments for the product.
     */
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

}
