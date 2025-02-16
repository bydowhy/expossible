<?php

namespace App\Http\Controllers\Creator;

use Inertia\Inertia;
use Inertia\Response;
use App\Models\Article;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;

class PublicationController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Creator/Publication/Index', [
            'filters' => Request::all('search', 'trashed'),
            'articles' => Auth::user()->articles()
                ->filter(Request::only('search', 'trashed'))
                ->paginate(10)
                ->withQueryString()
                ->through(fn ($article) => [
                    'id' => $article->id,
                    'title' => $article->title,
                    'topic' => $article->topic,
                    'created_at' => $article->created_at->format('d M Y'),
                    'deleted_at' => $article->deleted_at,
                ]),
        ]);
    }

    public function create(): Response
    {
        return Inertia::render('Creator/Publication/Create');
    }

    public function store(): RedirectResponse
    {
        Auth::user()->articles()->create(
            Request::validate([
                'title' => ['required'],
                'topic' => ['required'],
                'paragraph' => ['required'],
            ])
        );

        return Redirect::route('publications')->with('success', 'Article created.');
    }

    public function edit(Article $article): Response
    {
        return Inertia::render('Creator/Publication/Edit', [
            'article' => [
                'id' => $article->id,
                'title' => $article->title,
                'topic' => $article->topic,
                'paragraph' => $article->paragraph,
                'deleted_at' => $article->deleted_at,
            ],
        ]);
    }

    public function update(Article $article): RedirectResponse
    {
        $article->update(
            Request::validate([
                'title' => ['required'],
                'topic' => ['required'],
                'paragraph' => ['required'],
            ])
        );

        return Redirect::back()->with('success', 'Article updated.');
    }

    public function destroy(Article $article): RedirectResponse
    {
        $article->delete();

        return Redirect::back()->with('success', 'Article deleted.');
    }

    public function restore(Article $article): RedirectResponse
    {
        $article->restore();

        return Redirect::back()->with('success', 'Article restored.');
    }
}
