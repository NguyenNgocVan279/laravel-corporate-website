<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function showServicePage() {
        return view('frontend.service.index');
    }

    public function showContactPage() {
        return view('frontend.contact.index');
    }

    public function showProjectPage() {
        return view('frontend.project.index');
    }

    public function showBlogPage() {
        return view('frontend.blog.index');
    }
}
