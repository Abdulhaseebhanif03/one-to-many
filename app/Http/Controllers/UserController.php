<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;
use App\Models\Post;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::select('id', 'name')->withCount('posts')->get();
        return $users;

        // is trh bh likh skte hain
        // $users = User::find(2);
        // $posts = $users-> posts;

        // return $users;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    //    $post = New Post([

    //        'title' => 'Post Title',
    //        'description' => 'Post Content',
    //    ]);

    //    $user = User::find(2);
    //    $user->posts()->save($post );

       

       $user = User::find(2);

        $user->posts()->createMany([
            [
                'title' => 'Post Title - testing 1',
                'description' => 'Post Content - testing 1',
            ],
            [
                'title' => 'Post Title 2 - testing 2',
                'description' => 'Post Content 2 - testing 2',
            ],
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
