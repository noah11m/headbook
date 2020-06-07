<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class FollowsController extends Controller
{
    public function store(User $user)
    {
        auth()
        ->user()
        ->toggleFollow($user);

        $action = auth()->user()->following($user) ? 'följer nu' : 'har nu slutat följa';
        flash("Du $action {$user->name}")->success();

        return back();
    }
}
