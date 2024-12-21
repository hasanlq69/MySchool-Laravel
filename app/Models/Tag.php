<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
    use HasFactory;

    /**
     * guarded
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * posts
     *
     * @return void
     */
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
