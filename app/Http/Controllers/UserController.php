<?php

namespace App\Http\Controllers;


use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;

class UserController extends Controller
{

    public function index()
    {
        $users = UserResource::collection(User::all()->jsonSerialize());
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(UserRequest $request)
    {
        $data = $request->validated();
		User::query()->create($data);

		return redirect()->route('users.index');
    }


    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }


    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }


    public function update(Request $request, User $user)
    {
        $data = $request->validated();
		$user->update($data);

		return redirect()->route('users.index');
    }


    public function destroy(User $user)
    {
        try {
			$user->delete();
			return redirect()->route('users.index');
		} catch (\Exception $e) {
			return redirect()->route('users.index');
		}
    }
}
