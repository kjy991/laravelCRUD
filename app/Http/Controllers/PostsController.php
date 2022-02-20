<?php

namespace App\Http\Controllers;

use App\Models\PostModel;

use Illuminate\Http\Request;

class PostsController extends Controller{
    
    public function list(){

        $values = PostModel::all();

        return view('list', ['values' => $values] );
    }

    public function create(){

        return view('create');

    }
 
    public function store( ){

        request()->validate([
            'name' => 'required',
            'content' => 'required',
        ]);

        PostModel::create([
            'name' => request('name'),
            'content' => request('content'),
        ]);

        return redirect('/');

    }



    public function show(PostModel $value){
        
        return view('show', ['value' => $value]); 

    }

    public function update(PostModel $value){
        request()->validate([
            'name' => 'required',
            'content' => 'required',
        ]);

        $value->update([
            'name' => request('name'),
            'content' => request('content'),
        ]);
        

        return redirect('/');
    }

    public function delete(PostModel $value){
        
        $value->delete();

        return redirect('/');

    }


}
