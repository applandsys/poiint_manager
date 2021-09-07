<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\RequestPoint;
use App\Models\Transaction;


class RequestController extends Controller
{

    public function requestlist(){
        return RequestPoint::all();
    }


    public function request_list(){
        $user_id = Auth::id();
        return RequestPoint::where('user_id',$user_id)->get();
    }

    public function add_request(Request $request){
        if ($request->method()=="POST")
		{
            $user_id = Auth::id();
            $custom_date = date('d-m-Y');
            $input = $request->all();

           $amount =  $input['amount'];
           $listed_id =   $input['listed_id'];

            $transaction_id=  Transaction::create([
                'type' => 'request',
                'user_id' => $user_id,
                'listed_id' =>  $listed_id ,
                'custom_date' =>  $custom_date ,
                'amount' =>    $amount ,
            ]);

            $source_id =	RequestPoint::create([
                'server_id' => $input['server_id'],
                'user_id' => $user_id,
                'listed_id' => $input['listed_id'],
                'amount' =>  $amount,
                'custom_date' => $custom_date,
                'transaction_id' => $transaction_id->id,
                'status' => 'pending',

            ]);



            $response = [
                'title' => "Thanks",
                'message' => "Request Submitted Successfully",
                'status' =>'success'
            ];

            return response($response, 201);

        }
    }
}
