<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
	
	public function users() {
		return $this->hasMany('App\User');
	}
	
	public function residentAccessRight() {
		return $this->hasOne('App\ResidentAccessRight');
	}
	
	public function cedulaAccessRight() {
		return $this->hasOne('App\CedulaAccessRight');
	}
	
	public function summonsAccessRight() {
		return $this->hasOne('App\SummonsAccessRight');
	}
	
	public function clearanceAccessRight() {
		return $this->hasOne('App\ClearanceAccessRight');
	}
	
	public function reportAccessRight() {
		return $this->hasOne('App\ReportAccessRight');
	}
	
	public function addUserRole($data) {
		$var = new self();
		$var->name = $data->name;
		return $var->save();
	}
	
	
	public function editUserRole($data, $id) {
		$var = self::find($id);
		$var->name = $data->name;
		return $var->push();
	}
}
