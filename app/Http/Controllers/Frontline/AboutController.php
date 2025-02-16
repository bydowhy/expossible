<?php

namespace App\Http\Controllers\Frontline;

use Inertia\Inertia;
use Inertia\Response;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index(): Response {
        return Inertia::render('Frontline/About/Index');
    }
}
