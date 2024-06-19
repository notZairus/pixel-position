<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    function index ($name) {
        $tag = Tag::where(['name' => $name])->first();
        return view('tags.tag', ['tag' => $tag]);
    }
}
