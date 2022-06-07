<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
    //
 /*
    Mostrar todos os utilizadores em grupos de 6 elementos
    */
    public function index()
    {
        $users=User::latest()->paginate(6);
        return view('users.index',compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(User $user, StoreUserRequest $request)
    {
       $user->create($request->validated());
       return redirect()->route('users.index')->withSuccess(__('User created'));
    }

    public function show(User $user)
    {
        return view('users.show',['user' => $user]);
    }

    public function edit(User $user)
    {
        return view('users.edit',['user' => $user]);
    }

    public function update(User $user, UpdateUserRequest $request)
    {
        $user->update($request->validated());
        return redirect()->route('users.index')->withSuccess(__('User updated'));
      /*
        return redirect()->route('users.index')->with('success','user updated');
      */
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->withSuccess(__('User deleted'));
    }
}
