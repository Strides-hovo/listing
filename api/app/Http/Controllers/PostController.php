<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryCollection;
use App\Models\Category;
use App\Models\CategoryGroup;
use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{

    public function index()
    {
        $posts = Category::tree();


        return $posts;
    }



    public function test($parent_id = 0)
    {

       return new CategoryCollection(Category::with(['group.templates'])->where('parent_id', $parent_id)->get());

    }


    public function getAll()
    {
        return new CategoryCollection(Category::with(['group.templates'])->get());
    }

    public function store(StorePostRequest $request)
    {
        //
    }


    public function show(Post $post)
    {
        //
    }


    public function edit(Post $post)
    {
        //
    }


    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }


    public function destroy(Post $post)
    {
        //
    }
}
