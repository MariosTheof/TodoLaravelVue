<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class TodoController extends Controller
{

    public function index()
    {
        $todos = Todo::all()->toArray();
        foreach ($todos as &$todo) {
            $todo['completed'] = (int)$todo['completed'];
        }
        return array_reverse($todos);
    }

    public function store(Request $request)
    {
        $todo = new Todo([
            'text' => $request->input('text'),
            'completed' => 0,
            'tag' => $request->input('tag')
        ]);
        $todo->save();

        return response()->json('Todo created');
    }

    public function updateTodo(Request $request, $id)
    {
        $todo = Todo::find($id);
//        dd($todo, $request->all());
        $todo->update($request->all());

        return response()->json('Todo edited');
    }

    public function destroy($id)
    {
        $todo = Todo::find($id);
        $todo->delete();

        return response()->json('Todo deleted');
    }
}
