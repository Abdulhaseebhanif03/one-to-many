<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;  // ✅ User model import

class Post extends Model
{
    use HasFactory;

    // Table ka naam (agar tumhari table ka naam 'posts' hai to ye line optional hai)
    protected $table = 'posts';

    // Mass assignable fields
    protected $fillable = ['title', 'description', 'user_id'];

    // Har post ek user se belong karti hai
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
