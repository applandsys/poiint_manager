<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RequestPoint;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function dashboard(){
        if(Auth::user()->role!='admin'){
            Auth::logout();
            return redirect('/');	
        }
        return view('backend.common.dashboard');
    }
    
    public function request_list(){
        $ruquest_point = RequestPoint::get();
        return view('backend.admin.request_list')->with(compact('ruquest_point'));
    }
    
    public function pending_request(){
        $ruquest_point = RequestPoint::where('status','pending')->get();
        return view('backend.admin.request_list')->with(compact('ruquest_point'));
    }

    public function approved_request(){
        $ruquest_point = RequestPoint::where('status','approved')->get();
        return view('backend.admin.request_list_approved')->with(compact('ruquest_point'));
    }

    public function success_request(Request $request){
        if($request->method()=="POST"){
            $data = $request->input();
            $RequestPoint = RequestPoint::find($data['id']);
            $RequestPoint->status = 'approved';
            $RequestPoint->save();

            return redirect('admin/request_list')->with('success',"Request Approved Successfully");	
        }
    }

    
    public function reject_request(Request $request){
        if($request->method()=="POST"){
            $data = $request->input();
            $RequestPoint = RequestPoint::find($data['id']);
            $RequestPoint->status = 'reject';
            $RequestPoint->save();

            return redirect('admin/request_list')->with('success',"Request Rejected Successfully");	
        }
    }

   
    
    public function delete_request(Request $request){
        if($request->method()=="POST"){
            $data = $request->input();
            $RequestPoint = RequestPoint::find($data['id']);
            $RequestPoint->delete();
            return redirect('admin/request_list')->with('success',"Request Rejected Successfully");	
        }
    }

    public function withdraw_list(Request $request){
        $withdraw_point = Withdraw::get();
        return view('backend.admin.withdraw_list')->with(compact('withdraw_point'));
    }

    public function approved_withdraw(Request $request){
        
    }

    public function pending_withdraw(Request $request){
        
    }

    public function success_withdraw(Request $request){
        
    }

    public function reject_withdraw(Request $request){
        
    }

    public function delete_withdraw(Request $request){
        
    }

    public function payment_list(Request $request){
        
    }

    public function approved_payment(Request $request){
        
    }

    public function pending_payment(Request $request){
        
    }

    public function success_payment(Request $request){
        
    }

    public function reject_payment(Request $request){
        
    }

    public function delete_payment(Request $request){
        
    }

    public function user_list(Request $request){
        
    }

    public function add_user(Request $request){
        
    }

    public function rate_set(Request $request){
        
    }




}
