<?php

namespace App\Http\Controllers;

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
            // $posts = DB::select('SELECT * FROM posts where id = :id', ['id'=>1]);
            // $posts = DB::insert('INSERT into posts (title, excerpt, body, image_path, is_published, min_to_read)
            //  values (?,?,?,?,?,?)', ['test', 'test', 'test', 'test', true, 1]);
            // $posts = DB::delete('DELETE FROM posts where id = ?', [103]);

            $posts = DB::table('posts')
            // ->select('title', 'body')
            ->where('id', '>', '50')
            ->get();
            dd($posts);
            return view('/blog.index');
        }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show($id = 1)
    {
        return $id;
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
