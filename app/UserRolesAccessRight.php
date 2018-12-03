<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRolesAccessRight extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'create', 'read', 'update', 'delete', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
	
	public function userRoles() {
		return $this->hasMany('App\UserRole');
	}

	
	public function addUserRolesAccessRight($data) {
		$var = new self();
		$var->user_role_id = $data->user_role_id;
		$var->create = $data->create;
		$var->read = $data->read;
		$var->update = $data->update;
		$var->delete = $data->delete;
		return $var->save();
	}
	
	
	public function editUserRolesAccessRight($data, $id) {
		$var = self::find($id);
		$var->create = $data->create;
		$var->read = $data->read;
		$var->update = $data->update;
		$var->delete = $data->delete;
		return $var->push();
	}
}
