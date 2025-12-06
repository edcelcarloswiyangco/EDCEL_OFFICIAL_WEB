<?php

namespace App\Http\Controllers;
use App\Models\Posting;
use Illuminate\Http\Request;

class PostingController extends Controller
{
    
    public function create()
    {
        return view('admin.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'year' => 'required|integer',
        ]);
        
        $newPost = Posting::create($data);
        return redirect(route('create.index'))->with('success', 'Post created successfully!');
    }
}
