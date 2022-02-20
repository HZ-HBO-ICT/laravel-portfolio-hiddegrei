<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    //

    

    public function index($user)
    {
        $user = User::findOrFail($user);
        return view('pages/dashboard',[
            'user'=> $user
        ]);
    }


}
