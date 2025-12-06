<?php

namespace App\Http\Controllers;
use App\Models\Posting;
use Illuminate\Http\Request;

class PostingController extends Controller
{
    public function index()
    {
        $postings = Posting::all();
        return view('admin.dashboard', compact('postings'));
    }
    
    public function create()
    {
        return view('admin.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'year' => 'required|integer|max:2100',
        ]);
        
        $newPost = Posting::create($data);
        return redirect()->route('dashboard')->with('success', 'Post created successfully!');
    }
}
