<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Jenssegers\Mongodb\Auth\User as Authenticatable;

class User extends Authenticatable
{

	use Notifiable;	

	protected $collection = 'employees';

	protected $fillable = [
		'name',
		'birth',
		'avatar',
		'email',
		'phone1',
		'phone2',
		'role',
		'status',
		'start_work',
		'end_work',
		'company',

		'username',
		'password',
		'google_id',
	];

	protected $hidden = [
		'password',
		'remember_token',
	];

	public function rules() {
		return 	[];
	}

	public function messages() {
		return	[];
	}
}
