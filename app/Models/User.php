<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user'; // ✅ correct table name

    public function role()
    {
        return $this->belongsToMany(Role::class, 'user_role');
    }
}
