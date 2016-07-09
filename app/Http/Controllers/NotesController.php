<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;
use App\Card;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class NotesController extends Controller
{
    public function store(Request $request, Card $card){
      // return $request->all();
      // return $card;
      $note = new Note;
      $note->body = $request->body;

      $card->notes()->save($note);

      return back();
    }

    public function edit(Note $note){
      return view('notes.edit', compact('note'));

    }

    public function update(Request $request, Note $note)
    {

      // dd('hit');
      $note->update($request->all());

      return redirect('cards');
    }
}
