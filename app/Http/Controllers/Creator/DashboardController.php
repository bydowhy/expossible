<?php

namespace App\Http\Controllers\Creator;

use Inertia\Inertia;
use Inertia\Response;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Creator/Dashboard/Index');
    }
}
