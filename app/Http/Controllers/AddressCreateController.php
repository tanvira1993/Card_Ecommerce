<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Address;
use Response;
use DB;
use Validator;



class AddressCreateController extends Controller
{
    public function save (Request $request)
    {

        /*echo '<pre>';
        print_r($request->all());
        echo '</pre>';
        exit; */

        $rules = [
            'address' => 'required| min:10',
            'id_users' => 'required',
            'phoneNo' => 'required',

        ];

        $messages = [
            'address.required' => 'Address is required!',
            'set_default_address.required' => 'Default Address is required!',
            'phoneNo.required' => 'Phone Number is Required.',
        ];

        $validation = Validator::make($request->all(), $rules, $messages);

        // redirect on validation error
        if ($validation->fails()) {
            $errorMsgString = implode("<br/>",$validation->messages()->all());
            return Response::json(array('success' => false, 'heading' => 'Validation Error', 'message' => $errorMsgString), 400);
        }

        DB::beginTransaction();

        try {

            $address = new Address;
            $address->address = $request->address;
            $address->set_default_address = $request->defaultAddress;
            $address->phone_number = $request->phoneNo;

            if($address->save()){
                DB::commit();
                return Response::json(array('success' => TRUE, 'data' => $address), 200);
            }

            else{

                DB::rollback();
                return Response::json(array('success' => FALSE, 'heading' => 'Insertion Failed', 'message' => 'Address can not be set!'), 400);

            }

        }

        catch (\Exception $e) {
            echo $e;
            DB::rollback();
            return Response::json(array('success' => FALSE, 'heading' => 'Insertion Failed', 'message' => 'Address can not be set!'), 400);
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
