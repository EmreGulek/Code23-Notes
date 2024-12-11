<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;


class NoteController extends Controller
{

    public function index(){
        return view('panel.note.index');
    }

    public function create(Request $request){

        $note = new Note();

        $note->title = $request->title;
        $note->content = $request->content;
        $note->save();


    }


}
