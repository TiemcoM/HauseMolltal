<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function get(Request $request) {
        return $request->user();
    }

    public function update(Request $request) {
        $request->validate([
            'name' => 'sometimes|string',
            'email' => 'sometimes|string|email|unique:users'
        ]);

        $user = User::find($request->user()->id);
        $user->update($request->all());
        return $user;
    }

    public function changePassword(Request $request) {
        $request->validate([
            'oldPassword' => 'required|string',
            'newPassword' => 'required|string|confirmed'
        ]);
        $user = User::find($request->user()->id);
        $user->password = bcrypt($request['newPassword']);

        return 'password changed';
    }
}
