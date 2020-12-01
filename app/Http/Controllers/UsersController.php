<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::with('role')
            ->orderBy('name')
            ->simplePaginate(5);

        return view('users.index')->with('users', $users);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $availableRoles = Role::all();

        return view('users.userUnit', [
            'user' => $user,
            'availableRoles' => $availableRoles
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $parameters = $request->input();
        $user = User::find($id);
        $user->fill($parameters);
        $user->save();

        $user->role()->sync($parameters['role_id']);

        $availableRoles = Role::all();

        return redirect(route('adminPanel.users.edit', [
            'user' => $user,
            'availableRoles' => $availableRoles
        ]))->with('success_text', 'Пользователь сохранён');
    }
}
