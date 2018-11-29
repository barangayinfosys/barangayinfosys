<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\UserPermission;

class UserController extends Controller
{
    public function __construct(){

        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $view                   = view('/pages/viewuser');
        return $view;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $view                   = view('/pages/adduser');
        return $view;
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
            'name' => ['required', 'string', 'max:255', 'unique:users'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
		]);
			
		if ($validator->fails()) {
			return redirect()->back()->withErrors($validator);
		}
		
		else {
            $request->password = 'roflmao';
            if ($request->is_admin == null) {
                $request->is_admin = 0;
            }
            else {
                $request->is_admin = 1;
            }
			$result = new User();
            $result->addUser($request);
            
			if ($result) {
                $request->user_id = User::select('id')->where('username', $request->username)->value('id');
                if ($request->resident_information_profile == null) {
                    $request->resident_information_profile = 0;
                }
                else {
                    $request->resident_information_profile = 1;
                }
                if ($request->cedula == null) {
                    $request->cedula = 0;
                }
                else {
                    $request->cedula = 1;
                }
                if ($request->summons == null) {
                    $request->summons = 0;
                }
                else {
                    $request->summons = 1;
                }
                if ($request->barangay_clearance == null) {
                    $request->barangay_clearance = 0;
                }
                else {
                    $request->barangay_clearance = 1;
                }
                if ($request->reports == null) {
                    $request->reports = 0;
                }
                else {
                    $request->reports = 1;
                }
                $result2 = new UserPermission();
                $result2->addUserPermission($request);
				if ($result2) {	
                    $request->session()->flash('status', 'Successfully added article.');
                    return redirect()->route('users.create');
                }
                
                else {	
                    $request->session()->flash('status', 'Failed to add article.');
                    return redirect()->route('users.create');
                }
			}
			
			else {	
				$request->session()->flash('status', 'Failed to add article.');
				return redirect()->route('users.create');
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
