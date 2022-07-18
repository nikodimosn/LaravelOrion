<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Orion\Http\Controllers\RelationController;


class PostCommentsController extends RelationController
{

    protected $model = Post::class;

    protected $relation = 'comments';
}
