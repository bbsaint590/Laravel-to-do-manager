<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function allTodos()
    {
        $toDos = Todo::all();
//        foreach ($toDos as $toDo) {
//            if ($toDo->completed === 0) {
//                $toDo->complete = 'Incomplete';
//            } else {
//                $toDo->complete = 'Complete';
//            }

            return view('index', ['toDos' => $toDos]);
        }

        public function completedTasks(Request $request)
        {
            if (isset($request->completed)) {
                $completed = $request->completed;
                $toDos = Todo::where('complete', '=', $completed)->get();
            } else {
                $toDos = Todo::all();
            }
//            return response('task complete');

            return view('index', ['toDos' => $toDos]);

        }

}
