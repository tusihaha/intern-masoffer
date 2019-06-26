<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Carbon\Carbon;

class TestController extends Controller
{
    // Function for test
	public function testAddUserDefault() {
		$newUser = new User();
		$newUser->name = 'Lê Đức Toàn';
		$newUser->birth = '07/08/1998';
		$newUser->username = 'toanld';
		$newUser->password = bcrypt('12345678');
		$newUser->role = 'admin';
		$newUser->start_work = Carbon::now();
		$newUser->end_work = "";
		$newUser->avatar = "/images/default_avatar.png";
		$newUser->company = "MO";
		$newUser->save();
		return 'Done!';
	}
}
