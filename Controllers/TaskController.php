<?php

namespace  Simpler\Board\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  Simpler\Board\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        return Task::all();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        return Task::create([
            'title' => 'test',
            'description' => 'Some longwinded description here.'
        ]);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

}
