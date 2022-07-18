<?php

namespace App\Http\Controllers\Api;
use App\Models\Post;
use App\Http\Controllers\Api\PostsController;

use Orion\HTTP\Controllers\Controller;
use Orion\Http\Requests\Request;



class PostsController extends Controller
{
    protected $model = Post::Class;
    
    protected function afterSave(Request $request, $post)
    {
        $input = $request->all();
        $post = Post::create($input);
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $post->addMediaFromRequest('image')->toMediaCollection('images');
        }
    }


    public  function searchableBy(): array
    {
        return['title','body','catagory'];
    }

    public function filterableBy():array
    {
        return['title','body','created_at','updated_at','catagory' ];
    }


    public function sortableBy():array
    {
        return['title','catagory'];
    }


}


