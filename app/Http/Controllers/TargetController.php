<?php

namespace App\Http\Controllers;

use App\Target;
use App\Http\Requests\TargetRequest;

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

    public function edit(Target $target) {
        return view('edit', compact('target'));
    }

    public function store(TargetRequest $request) {
        Target::create([
            'name' => $request->input('name'),
            'ranking' => $request->input('ranking')
        ]);
        return view('create');
    }

    public function update(TargetRequest $request, Target $target) {
        // dd($request->all());
        Target::where('id', $target->id)
                ->update([
                    'name' => $request->name,
                    'ranking' => $request->ranking
                ]);
        return redirect('/');
    }
}
