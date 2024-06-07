<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticlesRequest;
use App\Models\Articles;
use Illuminate\Support\Facades\File;
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
        return view('admin.article.create');
    }

    public function store(ArticlesRequest $request) {
        $validatedData = $request->validated();

        $articles = new Articles;

        $articles->slug = Str::slug($validatedData['slug']);
        $articles->title = $validatedData['title'];
        $articles->content = $validatedData['content'];

        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext  = $file->getClientOriginalExtension();
            $fileName = time().'.'.$ext;

            $file->move('upload/articles', $fileName);
            $articles->image = $fileName;
        }

        $articles->status = $request->status == true ? '1':'0';
        $articles->save();

        return redirect()->route('articles-index')->with('message', 'Articles Added Successfully');
        
    }

    public function edit($id)
    {
        $articles = Articles::findOrFail($id);
        return view('admin.article.edit', compact('articles'));
        
    }

    public function update(ArticlesRequest $request, $id) {
        $validatedData = $request->validated();
        $articles = Articles::findOrFail($id);


        $articles->title = $validatedData['title'];
        $articles->content = $validatedData['content'];

        $articles->content = Str::slug($validatedData['slug']);
        $articles->status = $request->status ? 1 : 0;

        // hapus image

        if($request->hasFile('image')) {

            $path = 'upload/articles'.$articles->image;
            if(File::exists($path)) {
                File::delete($path);
            }

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $fileName = time().'.'.$ext;

            $file->move('upload/articles', $fileName);
            $articles->image = $fileName;
        }

        $articles->status = $request->status == true ? '1':'0';
        $articles->update();

        return redirect()->route('articles-index')->with('message', 'Articles update seuccesfully');
    }

    public function destroy($id)
    {
        $articles = Articles::findOrFail($id);
        if ($articles->articlesImages) {
            foreach ($articles->articlesImages as $image) {
                if (File::exists($image->image)) {
                    File::delete($image->image);
                }
            }
        }

        $articles->delete();
        return redirect()->back()->with('message', 'Articles Deleted Successfully with all images deleted');
    }
}
