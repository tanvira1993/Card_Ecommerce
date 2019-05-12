<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Category;
use App\Blog;
use Response;
use DB;
use Validator;



class BlogCreateController extends Controller
{
	public function save (Request $request)
	{
		
		/*echo '<pre>';
		print_r($request->all());
		echo '</pre>';
		exit;*/

		$rules = [
			'blogheadline' => 'required| max:60',
			'body' => 'required| max:300'
			
		];

		$messages = [
			'blogheadline.required' => 'Title is required!',
			'body.required' => 'Blog body is required!',			
		];

		$validation = Validator::make($request->all(), $rules, $messages);

        // redirect on validation error
		if ($validation->fails()) {
			$errorMsgString = implode("<br/>",$validation->messages()->all());
			return Response::json(array('success' => false, 'heading' => 'Validation Error', 'message' => $errorMsgString), 400);
		}

		DB::beginTransaction();

		try {

			$BlogCreate = new Blog;
			$BlogCreate->blog_title = $request->blogheadline;
			$BlogCreate->blog_post_text = $request->body;
			
			if($BlogCreate->save()){
				DB::commit();
				return Response::json(array('success' => TRUE, 'data' => $BlogCreate), 200);
			}

			else{

				DB::rollback();
				return Response::json(array('success' => FALSE, 'heading' => 'Insertion Failed', 'message' => 'category could can not be created!'), 400);

			}

		}
		
		catch (\Exception $e) {
			echo $e;
			DB::rollback();
			return Response::json(array('success' => FALSE, 'heading' => 'Insertion Failed', 'message' => 'category could can not be created!'), 400);
		}
		

	}

}