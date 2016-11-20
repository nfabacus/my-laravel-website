<?php

namespace App\Http\Controllers;

use App\Card;
use App\Note;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function store(Request $request, Card $card)
    {
      // option1
      // $note = new Note;
      // $note->body = $request->body;
      // $card->notes()->save($note);

      // option2
      // $note = new Note(['body' => $request->body]);
      // $card->notes()->save($note);

      //option 3
      // $card->notes()->create([
      //   'body' => $request->body
      // ]);

      // option 4
      // $card->notes()->create($request->all());

      // option 5
      $card->addNote(
        new Note($request->all())
      );

      return back();
    }
}
