<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UserController extends Controller
{
    public function userDetail(){
        return $user = Auth::user();
    }


    public function user_list(){
        return $user = User::get();
    }


    public function update_user(Request $request){

        if ($request->method()=="POST")
		{

            $input = $request->all();

            $id = Auth::id();
            $user = User::find($id);

            $photo = "no Photo";

              if(!empty($input['image'])){
                $photo  = time().'-'.$request->image->getClientOriginalName();
                $request->image->move(public_path('user_photo'),  $photo );

                $user->user_photo = $photo;

              }else{
                    unset($input['image']);
              }


            $user->name = $input['name'];
            $user->email = $input['email'];
            //$user->name = $input['role'];
            $user->contact_number = $input['contact_number'];
            if ($request->has('user_password')) {

            $user->password =  Hash::make($input['user_password']);

            }

            $user->save();

            $response = [
                'title' => "Thanks",
                'message' => "User Updated Successfully",
                'status' =>'success'
            ];

            return response($response, 201);
        }else{
            $response = [
                'title' => "Sorry",
                'message' => "You are not Allowed",
                'status' =>'failed'
            ];

            return response($response, 501);
        }


    }



}
