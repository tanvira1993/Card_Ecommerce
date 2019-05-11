<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Category;
use Response;
use DB;
use Validator;



class CategoryController extends Controller
{
	public function save (Request $request)
	{
		
		/*echo '<pre>';
		print_r($request->all());
		echo '</pre>';
		exit; */

		$rules = [
			'categoryName' => 'required| min:3 |unique:categories,categories_name',
			
		];

		$messages = [
			'categoryName.required' => 'Name is required!',
			'categoryName.unique' => 'This Category already has taken.',			
		];

		$validation = Validator::make($request->all(), $rules, $messages);

        // redirect on validation error
		if ($validation->fails()) {
			$errorMsgString = implode("<br/>",$validation->messages()->all());
			return Response::json(array('success' => false, 'heading' => 'Validation Error', 'message' => $errorMsgString), 400);
		}

		DB::beginTransaction();

		try {

			$category = new Category;
			$category->categories_name = $request->categoryName;
			$category->categories_info = $request->categoryInfo;
			
			if($category->save()){
				DB::commit();
				return Response::json(array('success' => TRUE, 'data' => $category), 200);
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

	public function deleteCategory($id){
		$deleteCategory = Category::where('id_categories', $id)->first();
		$deleteCategory->delete();
		return Response::json(['success' => true, 'data' => $deleteCategory], 200);
		
	}

	public function getCategoryById ($id)
	{		
		/*echo '<pre>';
		print_r($request->all());
		echo '</pre>';
		exit; */
		$categories = Category::select('categories.*')
		->where('id_categories', $id)
		->first();
		return Response::json(['success' => true, 'data' => $categories], 200);

	}

	
	public function update (Request $request, $id)
	{
		
		/*echo '<pre>';
		print_r($request->all());
		echo '</pre>';
		exit; */

		$rules = [
			'categories_name' => 'required| min:3 |unique:categories,categories_name',
			
		];

		$messages = [
			'categories_name.required' => 'Name is required!',
			'categories_name.unique' => 'This Category already has taken.',			
		];

		$validation = Validator::make($request->all(), $rules, $messages);

        // redirect on validation error
		if ($validation->fails()) {
			$errorMsgString = implode("<br/>",$validation->messages()->all());
			return Response::json(array('success' => false, 'heading' => 'Validation Error', 'message' => $errorMsgString), 400);
		}

		DB::beginTransaction();

		try {
			$category = Category::find($id);
			$category->categories_name = $request->categories_name;
			$category->categories_info = $request->categories_info;
			
			if($category->save()){
				DB::commit();
				return Response::json(array('success' => TRUE, 'data' => $category), 200);
			}

			else{

				DB::rollback();
				return Response::json(array('success' => FALSE, 'heading' => 'Insertion Failed', 'message' => 'category could can not be Updated!'), 400);

			}

		}
		
		catch (\Exception $e) {
			echo $e;
			DB::rollback();
			return Response::json(array('success' => FALSE, 'heading' => 'Insertion Failed', 'message' => 'category could can not be Updated!'), 400);
		}
		

	}



}