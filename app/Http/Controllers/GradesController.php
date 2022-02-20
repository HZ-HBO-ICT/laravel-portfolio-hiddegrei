<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GradesController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('grades/create');

    }

    public function store()
    {
       
        $data = request()->validate([
            'nameTest'=> 'required',
            'typeTest' => 'required',
            'ec'=>'required',
            'grade' => 'required'

        ]);

        

        auth()->user()->grades()->create($data);
        // \App\Models\Post::create($data);
        return redirect('/dashboard/' . auth()->user()->id);
    }

    public function show($grade)
    {

        dd($grade);

    }
}
