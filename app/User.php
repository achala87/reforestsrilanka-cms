<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
//use App\BlogPost;

class User extends Authenticatable
{
    //
    /**
     * Get all of the blog_posts for the user.
     */
    public function blog_posts()
    {
        return $this->hasMany(BlogPost::class);
    }
}
