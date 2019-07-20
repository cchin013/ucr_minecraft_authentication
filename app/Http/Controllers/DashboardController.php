<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    protected function updateMinecraftUsername(Request $request)
    {
        $user = $request->user();

        $error = [
            'minecraft_username.unique' => "This minecraft username is already in use.",
            'minecraft_username.required' => "Please enter a minecraft username to register to your account."
        ];

        $this->validate($request, [
            'minecraft_username' => ['required', 'string', 'min:3', 'max: 16', 'unique:users']
        ], $error);

        $user->update([
            'minecraft_username' => $request->minecraft_username
        ]);
    }
}
