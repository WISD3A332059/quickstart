<?php

namespace App\Http\Controllers;

use App\Task;
use Dotenv\Validator;
use Illuminate\Http\Request;

class TasksController extends Controller
{

    /**
     * @param Request $request
     */
    public function show(Request $request){

    }

    public function Add(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }

        Task::created($request->all());
        return redirect('/');
    }

    public function delete(Request $request){

    }
}
