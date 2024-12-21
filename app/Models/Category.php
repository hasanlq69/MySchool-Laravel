<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    /**
     * guarded
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * post
     *
     * @return void
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
