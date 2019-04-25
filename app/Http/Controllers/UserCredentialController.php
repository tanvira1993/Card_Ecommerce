<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Response;
use DB;
use Validator;



class UserCredentialController extends Controller
{
	public function saveUser (Request $request)
	{
		

		$rules = [
			'name' => 'required| min:3',
			'email' => 'required | email | unique:users,email',
			//'phone' => 'required | numeric',
			//'address' => 'required',
			'pass' => 'required | min:2',
			'pass2' => 'required | same:pass',

		];

		$messages = [
			'name.required' => 'Name is required!',
			//'name.unique' => 'This name already has taken.',
			'email.required' => 'Email is required!',
			'email.unique' => 'This Email already has taken.',
			//'phone.required' => 'Phone is required!',
			//'address.required' => 'Address is required!',
			'pass.required'=> 'PassWord is required',
			'pass.min' => 'password needs at least 2 character',
			'repass.required'=> 'ReEnter PassWord',
			'repass.same'=> 'PassWord Did not match',

		];

		$validation = Validator::make($request->all(), $rules, $messages);

        // redirect on validation error
		if ($validation->fails()) {
			$errorMsgString = implode("<br/>",$validation->messages()->all());
			return Response::json(array('success' => false, 'heading' => 'Validation Error', 'message' => $errorMsgString), 400);
		}

		DB::beginTransaction();

		try {

			$user = new User;
			$user->name = $request->name;
			$user->email = $request->email;
			//$user->phone = $request->phone;
			//$user->address = $request->address;		
			$user->password = Hash::make($request->pass);
			$user->id_user_roles=0;


			if($user->save()){
				DB::commit();
				return Response::json(array('success' => TRUE, 'data' => $user), 200);
			}

			else{

				DB::rollback();
				return Response::json(array('success' => FALSE, 'heading' => 'Insertion Failed', 'message' => 'User could can not be created!'), 400);

			}

		}
		
		catch (\Exception $e) {
			echo $e;
			DB::rollback();
			return Response::json(array('success' => FALSE, 'heading' => 'Insertion Failed', 'message' => 'User could can not be created!'), 400);
		}
		

	}


	public function login (Request $request)
	{
		
		$credentials = [
			'email' => $request->email,
			'password' => $request->pass
		];

		if (auth()->attempt($credentials)) {
			$token = auth()->user()->createToken('TutsForWeb')->accessToken;
			$userInfo= $request->user();
			// var_dump($token);
			return response()->json(['message'=>'Success','token' => $token, 'userInfo' => $userInfo], 200);
		} else {
			return response()->json(['heading' => 'Access Denied', 'message' => 'Invalid email or password'], 401);
		}	
	}

}