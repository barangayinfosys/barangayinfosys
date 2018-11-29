<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'password', 'is_admin', 'is_active',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'is_admin',
    ];
	
	public function userPermission() {
		return $this->hasOne('App\UserPermission');
	}
	
	public function addUser($data) {
		$var = new self();
		$var->name = $data->name;
		$var->username = $data->username;
		$var->password = $data->password;
		$var->is_admin = $data->is_admin;
		return $var->save();
	}
	
	
	public function editUser($data, $id) {
		$var = self::find($id);
		$var->username = $data->username;
		$var->password = $data->password;
		$var->is_admin = $data->is_admin;
		$var->is_active = $data->is_active;
		return $var->push();
	}
}
