<?php

namespace App\Http\Controllers\Frontline;

use Inertia\Inertia;
use Inertia\Response;
use App\Http\Controllers\Controller;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index(): Response {
        return Inertia::render('Frontline/Article/Index', [
            'articles' => Article::all()
        ]);
    }
}
