<?php

namespace App\Http\Controllers;

use App\Models\Url;
use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function index($path)
    {
        $url = Url::where('path', $path)->where('status', 'active')->firstOrFail();

        return view('redirect', compact('url'));
    }
}
