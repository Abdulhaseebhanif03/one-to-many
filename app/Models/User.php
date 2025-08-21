<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;  // ✅ for auth users
use Illuminate\Notifications\Notifiable;  // ✅ optional (for notifications)
use App\Models\Post;  // ✅ Post model import

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Table ka naam (agar tumhari table ka naam 'users' hai to ye line optional hai)
    protected $table = 'users';

    // Mass assignable fields
    protected $fillable = ['name', 'email'];

    // Ek user ke multiple posts
    public function posts()
    {
        return $this->hasMany(Post::class);  // ✅ relation defined
    }
}
