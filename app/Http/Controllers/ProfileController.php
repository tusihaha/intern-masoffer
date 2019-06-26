<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Work;

class ProfileController extends Controller
{
    public function viewProfile(Request $request) {
        $user = Auth::user();
        return view('profile', compact('user'));
    }
}
