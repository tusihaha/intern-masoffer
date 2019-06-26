<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class TestController extends Controller
{
    // Function for test
	public function testAddUserDefault() {
		$newUser = new User();
		$newUser->name = 'Lê Đức Toàn';
		$newUser->username = 'toanld';
		$newUser->password = bcrypt('12345678');
		$newUser->role = 'admin';
		$newUser->save();
		return 'Done!';
	}
}
