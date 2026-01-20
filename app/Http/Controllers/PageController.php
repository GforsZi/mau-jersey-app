<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return $this->page('/');
    }

    public function page($slug = '/') {

        $page = Page::where('slug', $slug)->firstOrFail();
        $contents = $page->content;
        return view('page', compact(['page', 'contents']));
    }
}
