<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    public function index(){
        $users = Note::paginate('10');
        return view('crud.index',compact('users'));
    }

    public function create()
    {
        return view('crud.create');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required|string|max:250',
            'content' => 'required|string|max:250',
        ]);
        try {
            $crud = new Note;
            $crud->title = $request->title;
            $crud->content = $request->content;
            $crud->save();
            return redirect('crud')->with('success', 'Data Inserted Successfully.');
        } catch (\Throwable $th) {
            return redirect('crud')->with('danger', 'Data Not Inserted Successfully.');
        }
    }

    public function show(Note $crud)
    {
        return view('crud.show', compact('crud'));
    }

    public function edit(Note $crud)
    {
        return view('crud.edit', compact('crud'));
    }

    public function update(Request $request, Note $crud)
    {
        try {
            $crud->title = $request->title ?? $crud->title;
            $crud->content = $request->content ?? $crud->content;
            $crud->save();
            return redirect('crud')->with('success', 'Data Updated Successfully.');
        } catch (\Throwable $th) {
            return redirect('crud')->with('danger', 'Data Not Updated Successfully.');
        }
    }

    public function destroy(Note $crud)
    {
        $crud->delete();
        return redirect('crud')->with('success', 'Data Deleted Successfully.');
    }
}
