<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HistoryController extends Controller
{
    public function history(Request $request){
        $user_id = Auth::id();
       return Transaction::where('user_id',$user_id)->get();

    }
}
