<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request){
        $user = User::all();
        foreach($user as $data){
            echo $data->name;
            echo '<br>';
        }
    }
}