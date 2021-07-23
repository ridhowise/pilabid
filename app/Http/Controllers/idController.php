<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use  App\Models\User;
use  App\Models\Level;
use  QRCode;

class idController extends Controller
{
    public function index($id)
    {
        $data = User::findOrFail($id);
        $level = Level::get();
        return view('id.index', compact('data', 'level'));
    }
}
