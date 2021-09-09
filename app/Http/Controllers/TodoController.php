<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class TodoController extends Controller
{

    public function Index(){

        $todos = Todo::paginate(3);
        return view('todos.index',compact('todos'));
    }


    public function Show(Todo $todo){

        return view('todos.show',compact('todo'));
    }


    public function Create(){
        return view('todos.create');
    }

    public function Store (Request $request){

        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);


        Todo::create([
            'title' => $request->title,
            'description' => $request->description
        ]);

        Alert::success('با تشکر', 'تسک با موفقیت ایجاد شد');


        return redirect()->route('todos.index');

    }

    public function Edit(Todo $todo){
        return view('todos.edit',compact('todo'));
    }

    public function Update(Request $request , Todo $todo){
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);


        $todo->update([
            'title' => $request->title,
            'description' => $request->description
        ]);

        Alert::success('با تشکر', 'تسک با موفقیت بروزرسانی شد');

        return redirect()->route('todos.index');

    }

    public function Delete(Todo $todo){
        $todo->delete();
        Alert::error('حذف', 'تسک مورد نظر حذف شد');

        return redirect()->route('todos.index');

    }

    public function Complete(Todo $todo){

        $todo->completed = 1;
        $todo->save();

        Alert::info('دیده شده', 'تسک مورد نظر دیده شد');

        return redirect()->back();
    }
}
