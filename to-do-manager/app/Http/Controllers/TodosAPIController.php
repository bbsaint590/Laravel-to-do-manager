<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
class TodosAPIController extends Controller
{
    public function index()
    {
        $toDos = Todo::all();
        return response()->json([
            'message' => 'Todos retrieved successfully',
            'success' => true,
            'data' => $toDos
        ]);
    }

    public function create(Request $request)
    {
        $toDo = new Todo();
        $toDo->id = $request->id;
        $toDo->name = $request->name;
        $toDo->completed = $request->completed;
        $toDo->category_id = $request->category_id;

        $toDo->save();

        return response()->json([
            'message' => 'Todo added to the DB',
            'success' => true
        ]);
    }

    public function delete(Request $request)
    {
        $toDo = Todo::find($request->id);

        if ($toDo) {
            $toDo->delete();

            return response()->json([
                'message' => 'Todo item deleted successfully.',
                'success' => true
            ]);
        } else {
            return response()->json([
                'message' => 'Todo item not found.',
                'success' => false
            ]);
        }
    }

    public function update(int $id, Request $request)
    {
        $toDo = Todo::find($id);

        $toDo->id = $request->id;
        $toDo->completed = $request->completed;
        $toDo->name = $request->name;
        $toDo->category_id = $request->category_id;
        $toDo->save();

        if (!$toDo) {
            return response()->json([
                'message' => 'Todo item not found.',
                'success' => false
            ]);
        } else {
            return response()->json([
                'message' => 'Todo item updated successfully.',
                'success' => true
            ]);
        }
    }
}

