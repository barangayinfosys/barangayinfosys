<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\UserRole;
use App\UsersAccessRight;
use App\UserRolesAccessRight;
use App\UserPositionsAccessRight;

class UserRoleController extends Controller
{
    public function __construct(){

        $this->middleware('auth');
    }
	
	public function create()
    {
		$userRoles = UserRole::with('usersAccessRight', 'userRolesAccessRight', 'userPositionsAccessRight')->get();
        return view('pages/adduserrole')->with('userRoles', $userRoles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$userRoles = UserRole::with('usersAccessRight', 'userRolesAccessRight', 'userPositionsAccessRight')->get();
        return view('pages/adduserrole')->with('userRoles', $userRoles);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$validator = Validator::make($request->toArray(), [
            'name' => ['required', 'string', 'max:255', 'unique:user_roles'],
		]);
			
		if ($validator->fails()) {
			return redirect()->back()->withErrors($validator);
		}
		
		else {
			$result = new UserRole();
            $result->addUserRole($request);
            /*if ($result) {
				$result = new UserRole();
				$result->addUserRole($request);
				return response()->json([
					'fail' => false,
					'redirect_url' => url('users'),
				]);
			}*/
			if ($result) {
				$request->user_id = User::select('id')->where('username', $request->username)->value('id');
				$usersAccessRights = new UsersAccessRight();
				$usersAccessRights->addUsersAccessRight($request);
				$userRolesAccessRights = new UserRolesAccessRight();
				$userRolesAccessRights->addUserRolesAccessRight($request);
				$userPositionsAccessRights = new UserPositionsAccessRight();
				$userPositionsAccessRights->addUserPositionsAccessRight($request);
                $request->session()->flash('status', 'Successfully added user role.');
                return redirect()->route('user_roles.create');
			}
			
			else {	
				$request->session()->flash('status', 'Failed to add user role.');
				return redirect()->route('user_roles.create');
            }
		}
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
