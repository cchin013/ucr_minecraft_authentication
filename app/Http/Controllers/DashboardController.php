<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\UpdateUser;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function updateUser(UpdateUser $request)
    {
        $user = $request->user();

        $user->update([
            'minecraft_username' => $request->json('minecraft_username'),
            'discord_id' => $request->json('discord_id')
        ]);

        return redirect()->back()->with('minecraft_success', 'Success! You have updated your minecraft username.');
    }
}
