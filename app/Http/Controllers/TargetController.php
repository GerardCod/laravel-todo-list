<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Target;

class TargetController extends Controller
{
    //
    public function index() {
        $targets = Target::orderBy('ranking', 'desc')
                        ->paginate(5);
        return view('index', compact('targets'));
    }

    public function create() {
        return view('create');
    }

    public function edit() {
        return view('edit');
    }
}
