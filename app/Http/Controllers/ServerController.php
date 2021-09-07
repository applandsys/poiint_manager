<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Server;

class ServerController extends Controller
{

    public function server_list(){
        return Server::all();
    }
}
