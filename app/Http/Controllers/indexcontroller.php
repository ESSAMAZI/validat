<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\posts;


class indexcontroller extends Controller
{
    public function create(){
        return view('create');
    }
    public function store(PostRequest $request){
        if($request ->validated()){
            posts::create([
                'title'=> $request->title,
                'content' => $request->content,
            ]);
        }
    }
}
