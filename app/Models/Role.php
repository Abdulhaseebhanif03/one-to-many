<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    // Laravel ko table ka naam batana hoga
    protected $table = 'role';

    public function user()
    {
        return $this->belongsToMany(User::class, 'user_role');
    }
}
