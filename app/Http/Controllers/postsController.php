<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

 // Replace with your Post model


class postsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            // $posts = DB::table('posts')->get();
            // return view('/blog.index', [
            //     'posts'=> $posts
            // ]);

            // $posts = Post::orderBy('id', 'desc')->take(10)->get();
            // 
            
           
            return view('blog.index', [
               'posts'=> Post::orderBy('updated_at', 'desc')->get()
            ]);
        }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd('Redirected to the store method');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('blog.show', [
            'post' => Post::findOrFail($id)
        ]);
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
