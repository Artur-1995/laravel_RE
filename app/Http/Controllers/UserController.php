<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MOdels\User;
use App\Decorators\SkillDecorator;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        
        foreach ($users as $user) {
            // if (!$user->description){
            $description = new SkillDecorator();
            $user = $description->getDescription($user);
            $user->save();
            // }
        }

        return view("welcome", compact("users"));
    }
}