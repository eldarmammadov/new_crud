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
      return $card;
      $note = new Note;
      $note->body = $request->body;

      $card->notes()->save($note);

      return back();
    }
}
