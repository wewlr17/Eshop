<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function userlist()
    {
        $users = User::All();

        return view('article.users', compact('users'));
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/user/userlist')->withInfo('User delete');
    }

    public function edit($id)
    {
        $user = User::find($id);

        return view('article.profile', ['user' => User::findOrFail($id)]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'role_user' => 'required',
            'image' => 'image|mimes:jpg,jpeg,png,gif|max:1024',
        ]);

        $user = User::find($id);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->role_user = $request->input('role_user');

        if ($request->file('input_img')) {
            $file = $request->file('input_img');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $location = public_path('/images');
            $file->move($location, $filename);
            $user->img_profile = $filename;
        }

        $user->save();

        return redirect('user/userlist')->withInfo('Profile mis à jour !');
    }
}
