<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    //public function __construct()
    //{
       // $this->middleware('auth');
   // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */


    public function GetUsers(Request $request)
    {
		$like = $request['like'];

		$this->middleware('roles:2');
		$thisUser = $request->user();
		$users = User::all();

		foreach($users as $key=> $user)
		{
			if ($user['role'] >= $thisUser['role'] || ($like!==null && (stripos($user['name'], $like) === FALSE)))
			{
				unset($users[$key]);
			}
		}
		return view('admin',['users'=>$users]);

    }


	 public function PostAdminAssignRoles(Request $request)
    {
		$this->middleware('roles:2');
		$thisUser = $request->user();
		$user = User::where('email',$request['email'])->first();
		$user['role'] = $request['role'];
		$user->save();
		return redirect()->back();
    }
}
