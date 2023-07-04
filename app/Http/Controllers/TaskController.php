<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Http\Controllers\Controlller;
use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
   
    public function index()
    {
        return Task::all();
    }


    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'descricao'=> 'required',
            'status' => 'required',
        ]);

        return Task::create($request->all());
    
    }

    public function show($id)
    {
        return Task::FindOrfail($id);
    }
    
    public function update(Request $request, $id)
    {
        $Task = task::FindOrFail($id);
        $Task->update($request->all());

    } 

    public function destroy($id)
    {
        Task::FindOrFail($id)->delete();

    }
}
