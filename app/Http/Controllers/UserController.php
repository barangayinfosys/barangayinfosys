<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\UserRole;
use App\UserPosition;

class UserController extends Controller
{
    public function __construct(){

        $this->middleware('auth');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$users = User::with('userRole', 'userPosition')->get();
		$userRoles = UserRole::all();
		$userPositions = UserPosition::all();
        return view('pages/adduser', compact('users', 'userRoles', 'userPositions'));
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
            'username' => ['required', 'string', 'max:255', 'unique:users'],
		]);
			
		if ($validator->fails()) {
			return redirect()->back()->withErrors($validator);
		}
		
		else {
			//placeholders start
            $request->password = bcrypt('roflmao');
			//placeholders end
			//$result = new User();
            //$result->addUser($request);
			$result->addUser($request);
            return response()->json($result);
			/**if ($result) {
                $request->session()->flash('status', 'Successfully added article.');
                return redirect()->route('users.create');
			}
			
			else {	
				$request->session()->flash('status', 'Failed to add article.');
				return redirect()->route('users.create');
            }**/
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
