<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    //
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['post_title'];
    

    /**
     * Get the user that owns the task.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
