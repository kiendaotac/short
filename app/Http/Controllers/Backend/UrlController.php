<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Url;

class UrlController extends Controller
{
    public function index()
    {
        return view('backend.url.index');
    }

    public function create()
    {
        return view('backend.url.create');
    }

    public function edit(Url $url)
    {
        return view('backend.url.edit', compact('url'));
    }
}
