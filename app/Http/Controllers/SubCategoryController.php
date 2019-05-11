<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Category;
use App\SubCategory;
use Response;
use DB;
use Validator;



class SubCategoryController extends Controller
{
	public function getCategoryList ()
	{		
		/*echo '<pre>';
		print_r($request->all());
		echo '</pre>';
		exit; */
		$categories = Category::select('categories.*')->get();
		return Response::json(['success' => true, 'data' => $categories], 200);

	}

	public function save (Request $request)
	{
		
		/*echo '<pre>';
		print_r($request->all());
		echo '</pre>';
		exit; */

		$rules = [
			'subCategoryName' => 'required| min:3',
			'idCategory' => 'required',
		];

		$messages = [
			'subCategoryName.required' => 'Name is required!',
			'idCategory.required' => 'Select Category !',
			
		];

		$validation = Validator::make($request->all(), $rules, $messages);

        // redirect on validation error
		if ($validation->fails()) {
			$errorMsgString = implode("<br/>",$validation->messages()->all());
			return Response::json(array('success' => false, 'heading' => 'Validation Error', 'message' => $errorMsgString), 400);
		}

		DB::beginTransaction();

		try {

			$subCategory = new SubCategory;
			$subCategory->id_categories = $request->idCategory;
			$subCategory->sub_categories_name = $request->subCategoryName;
			$subCategory->sub_categories_info = $request->subCategoryInfo;
			
			if($subCategory->save()){
				DB::commit();
				return Response::json(array('success' => TRUE, 'data' => $subCategory), 200);
			}

			else{

				DB::rollback();
				return Response::json(array('success' => FALSE, 'heading' => 'Insertion Failed', 'message' => 'Sub Category could can not be created!'), 400);

			}

		}
		
		catch (\Exception $e) {
			echo $e;
			DB::rollback();
			return Response::json(array('success' => FALSE, 'heading' => 'Insertion Failed', 'message' => 'Sub category could can not be created!'), 400);
		}
		

	}



}