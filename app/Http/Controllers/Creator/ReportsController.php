<?php

namespace App\Http\Controllers\Creator;

use Inertia\Inertia;
use Inertia\Response;
use App\Http\Controllers\Controller;

class ReportsController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Creator/Reports/Index');
    }
}
