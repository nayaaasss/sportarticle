<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticlesRequest;
use App\Models\Articles;
use Illuminate\Support\Str;

class ArticlesController extends Controller
{
    public function index() 
    {
        $articles = Articles::all();
        return view('admin.article.index', compact('articles'));
    }

    function create()
    {
        $articles = Articles::all();
        return view('admin.article.create', compact('articles'));
    }

    public function store(ArticlesRequest $request) {
        $validatedData = $request->validated();

        Articles::create([
            'slug'              => Str::slug($validatedData['slug']),
            'title'             => $validatedData['title'],
            'content'           => $validatedData['content'],
            'status'            => $request->status == true ? '1' : '0',
            'image'            => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

        Articles::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $imagePath,
        ]);

        return redirect()->route('articles-index')->with('message', 'Product Added Successfully');
        
    }
}
