<?php


namespace App\Http\Controllers\Api;
use App\Models\User;

use Orion\Http\Controllers\Controller;
use Orion\Http\Requests\Request;

class UserController extends Controller
{
    protected $model = User::Class;
}
