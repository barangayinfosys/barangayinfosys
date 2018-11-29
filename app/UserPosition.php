<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPosition extends Model
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
	
	public function addUserPosition($data) {
		$var = new self();
		$var->name = $data->name;
		return $var->save();
	}
	
	
	public function editUserPosition($data, $id) {
		$var = self::find($id);
		$var->name = $data->name;
		return $var->push();
	}
}
