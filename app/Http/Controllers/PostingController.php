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
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('postings', 'public');
            $data['image'] = $imagePath;
        }
        
        $newPost = Posting::create($data);
        return redirect()->route('dashboard')->with('success', 'Post created successfully!');
    }

    public function edit(Posting $post)
    {
        return view('admin.edit', ['post' => $post]);
    }

    public function update(Request $request, Posting $post)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'year' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('postings', 'public');
            $data['image'] = $imagePath;
        }

        $post->update($data);

        return redirect(route('dashboard'))->with('success', 'Post updated successfully!');
    }

    public function destroy(Posting $post)
    {
        $post->delete();
        return redirect()->route('dashboard')->with('status', 'Post deleted successfully!');
    }

    

}
