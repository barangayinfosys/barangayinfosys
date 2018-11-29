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
        'username', 'password', 'name', 'phone_number', 'user_role_id', 'user_position_id', 'is_active',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
	
	public function userRole() {
		return $this->belongsTo('App\UserRole');
	}
	
	public function userPosition() {
		return $this->belongsTo('App\UserPosition');
	}
	
	public function addUser($data) {
		$var = new self();
		$var->username = $data->username;
		$var->password = $data->password;
		$var->name = $data->name;
		$var->phone_number = $data->phone_number;
		$var->user_role_id = $data->user_role_id;
		$var->user_position_id = $data->user_position_id;
		return $var->save();
	}
	
	
	public function editUser($data, $id) {
		$var = self::find($id);
		$var->password = $data->password;
		$var->name = $data->name;
		$var->phone_number = $data->phone_number;
		$var->user_role_id = $data->user_role_id;
		$var->user_position_id = $data->user_position_id;
		$var->is_active = $data->is_active;
		return $var->push();
	}
}
