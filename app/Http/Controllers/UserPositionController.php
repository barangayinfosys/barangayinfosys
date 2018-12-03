<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\UserPosition;

class UserPositionController extends Controller
{
    public function __construct(){

        $this->middleware('auth');
    }
	
	public function index()
    {
		$userPositions = UserPosition::all();
        return view('pages/adduserposition')->with('userPositions', $userPositions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$userPositions = UserPosition::all();
        return view('pages/adduserposition')->with('userPositions', $userPositions);
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
			$result = new UserPosition();
            $result->addUserPosition($request);
            /*if ($result) {
				$result = new UserPosition();
				$result->addUserPosition($request);
				return response()->json([
					'fail' => false,
					'redirect_url' => url('users'),
				]);
			}*/
			if ($result) {
                $request->session()->flash('status', 'Successfully added user position.');
                return redirect()->route('user_positions.create');
			}
			
			else {	
				$request->session()->flash('status', 'Failed to add user position.');
				return redirect()->route('user_positions.create');
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
