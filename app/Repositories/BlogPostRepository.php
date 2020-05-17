<?php

namespace App\Repositories;

use App\User;
use App\BlogPost;

class BlogPostRepository
{
    /**
     * Get all of the blog posts for a given user.
     *
     * @param  User  $user
     * @return Collection
     */
    public function UserPosts()
    {
        return BlogPost::all();
    }
}