<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResidentInformation extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'birthday', 'place_of_birth', 'height', 'weight', 'civil_status', 'nationality', 'occupation', 
		'phone_number', 'tax_identification_number',
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
	
	public function addResidentInformation($data) {
		$var = new self();
		$var->name = $data->name;
		$var->birthday = $data->birthday;
		$var->place_of_birth = $data->place_of_birth;
		$var->height = $data->height;
		$var->weight = $data->weight;
		$var->civil_status = $data->civil_status;
		$var->nationality = $data->nationality;
		$var->occupation = $data->occupation;
		$var->phone_number = $data->phone_number;
		$var->tax_identification_number = $data->tax_identification_number;
		return $var->save();
	}
	
	
	public function editResidentInformation($data, $id) {
		$var = self::find($id);
		$var->name = $data->name;
		$var->birthday = $data->birthday;
		$var->place_of_birth = $data->place_of_birth;
		$var->height = $data->height;
		$var->weight = $data->weight;
		$var->civil_status = $data->civil_status;
		$var->nationality = $data->nationality;
		$var->occupation = $data->occupation;
		$var->phone_number = $data->phone_number;
		$var->tax_identification_number = $data->tax_identification_number;
		return $var->push();
	}
}
