<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Livre;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        return Inertia::render('Index', [
            'livres' => Livre::all()
        ]);
    }
    //
    public function about(){
        return Inertia::render('About');
    }
    public function contact(){
        return Inertia::render('Contact');
    }
}
