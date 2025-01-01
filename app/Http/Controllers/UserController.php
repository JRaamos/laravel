<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return View('users.index', [
            'users' => User::paginate(2),
        ]);
    }

    public function show(User $user)
    {
        return View('users.show', [
            'user' => $user,
        ]);
    }

    public function store(Request $request)
    {
        $input = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:3',
            'avatar' => 'file',
        ]);

        if (!empty($input['avatar']) && $input['avatar']->isValid()) {
            $url = $input['avatar']->store();
        }
        // User::create($input);
        // return redirect()->back();
    }

    public function create()
    {
        return View('users.create');
    }
};
