<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class WhitelistController extends Controller
{
    public function index() {
        return response()->json([
           DB::table('users')->select('minecraft_username')->get()
        ]);
    }
}
