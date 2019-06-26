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
		'username',
		'password',
		'email',
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
