<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Note;
use Illuminate\Support\Facades\Auth;


class NoteController extends Controller
{

    public function create()
    {
        $categories = Category::where('user_id',Auth::id())->get();

        return view('panel.note.create', compact('categories'));
    }

    public function add(Request $request)
    {

        $note = new Note();
        $note->user_id = $request->user()->id;
        $note->category_id = $request->category_id;
        $note->content = $request->content;
        $note->status = $request->status;
        $note->deadline = $request->deadline;
        $note->save();

        return redirect()->route('note.index');
   }


    public function index()
    {
        $categories = Category::all();
        $notes = Note::where('user_id',Auth::id())->get();
        return view('panel.note.index',compact('notes','categories'));
    }

    public function edit($note_id){

        $note = Note::find($note_id);
        if($note->user_id != Auth::id()){
            abort(403);
        }

        $categories = Category::where('user_id',Auth::id())->get();
        return view('panel.note.edit',compact('note','categories'));
    }

    public function update( Request $request){


        $note = Note::find($request->note_id);
        $note->category_id = $request->category_id;
        $note->content = $request->content;
        $note->status = $request->status;
        $note->deadline = $request->deadline;
        $note->user_id = $request->user_id;
        $note->save();

        return redirect()->route('note.index',compact('note'));
    }

    public function noteDelete($note_id){
        $note = Note::find($note_id);
        if($note->user_id != Auth::id()){
            abort(403);
        }
        if (!$note) {
            return response()->json(['success' => false, 'message' => 'Not bulunamadı.'], 404);
        }

        $note->delete();

        return response()->json(['success' => true, 'message' => 'Not başarıyla silindi.']);
    }
}
