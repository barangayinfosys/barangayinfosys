<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPermission extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'resident_information_profile', 'cedula', 'summons', 'barangay_clearance', 'reports',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'is_admin',
    ];
	
		public function addUserPermission($data) {
		$var = new self();
		$var->user_id = $data->user_id;
		$var->resident_information_profile = $data->resident_information_profile;
		$var->cedula = $data->cedula;
		$var->summons = $data->summons;
		$var->barangay_clearance = $data->barangay_clearance;
		$var->reports = $data->reports;
		return $var->save();
	}
	
	
	public function editUserPermission($data, $id) {
		$var = self::find($id);
		$var->resident_information_profile = $data->resident_information_profile;
		$var->cedula = $data->cedula;
		$var->summons = $data->summons;
		$var->barangay_clearance = $data->barangay_clearance;
		$var->reports = $data->reports;
		return $var->push();
	}
}
