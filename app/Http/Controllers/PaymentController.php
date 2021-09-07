<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Payment;
use App\Models\Transaction;

class PaymentController extends Controller
{
    //

    public function payment_list(){
        $user_id = Auth::id();
        return Payment::where('user_id',$user_id)->get();
    }



    public function add_payment(Request $request){
        if ($request->method()=="POST")
		{
            $user_id = Auth::id();
            $custom_date = date('d-m-Y');
            $input = $request->all();

            $amount =  $input['amount'];
            $listed_id =   0;

             $transaction_id=  Transaction::create([
                 'type' => 'request',
                 'user_id' => $user_id,
                 'listed_id' =>  $listed_id ,
                 'custom_date' =>  $custom_date ,
                 'amount' =>    $amount ,
             ]);


            $source_id =	Payment::create([
                'user_id' => $user_id,
                'method' => $input['method'],
                'amount' =>  $amount ,
                'custom_date' => $custom_date,
                'transaction_id' => $transaction_id->id,
                'status' => 'pending',

            ]);


            $response = [
                'title' => "Thanks",
                'message' => "Payment Submitted Successfully",
                'status' =>'success'
            ];

            return response($response, 201);

        }
    }




}
