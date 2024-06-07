<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index() {
        $articles = Articles::all();
        return view('frontend.index', ['articles' => $articles]);
    }
}
