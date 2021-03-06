<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    /**
     * Fetch a path to the current thread
     * @return string
     */
    public function path()
    {
        return '/threads/' . $this->id;
    }

    /**
     * Relationship
     */

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
