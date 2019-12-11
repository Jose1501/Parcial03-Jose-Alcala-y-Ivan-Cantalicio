<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfessionalController extends Controller
{
    //LISTAR Professional
    function index(){
        $professional=Professional::all();
        
        return view('index',['professional'=>$professional->toArray()]);
        
       
    }

    //

    function edit($codeLessor){
       
        $lessor=Lessor::find($codeLessor);
        /
        return view('lessor.edit', compact('lessor'));
    }
    
    function create(){
        return view('create');
    }
    function store(Request $request){
        $this->validate($request, [
            'name' => 'required|min:5',
            'dni' => 'required|min:8',
            'profession' => 'required|min:5',
        ]);
        Professional::create($request->all());
        return redirect('/professional');
    }
    function show($codeLessor){
        
        $lessor=Lessor::find($codeLessor);
       
        return view('lessor.show',compact('lessor'));
    }

   
}
