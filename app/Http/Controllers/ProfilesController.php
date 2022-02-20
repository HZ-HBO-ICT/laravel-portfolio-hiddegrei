<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
// C:\xampp\htdocs\documents\freecodegram\app\Models\User.php

class ProfilesController extends Controller
{
    //
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($user)
    {
        $user = User::findOrFail($user);
        return view('profile/index',[
            'user'=> $user
        ]);
    }
}
