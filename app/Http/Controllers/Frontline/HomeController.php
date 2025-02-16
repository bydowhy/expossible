<?php

namespace App\Http\Controllers\Frontline;

use Inertia\Inertia;
use Inertia\Response;
use App\Models\Article;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(): Response {
        return Inertia::render('Frontline/Home/Index',[
            'articles' => Article::latest()->take(4)->get()
        ]);
    }
}
