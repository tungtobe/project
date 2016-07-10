<?php

namespace App\Http\Controllers;

use App\Card;
use App\Note;
use Illuminate\Http\Request;

class NotesController extends Controller {
    public function store(Request $request, Card $card) {
        // option1
        // $note = new Note();
        // $note->body = $request->body;
        // $card->notes()->save($note);

        //option 2
        // $note = new Note(['body' => $request->body]);
        // $card->notes()->save($note);

        //option 3
        // $card->notes()->save(new Note(['body' => $request->body]));
        //
        // option 4
        // $card->notes()->create($request->all());
        //
        // option 5
        // $note = new Note(['body' => $request->body]);
        return $card;
        $this->validate($request, [
            'body' => 'required|min:10',
        ]);

        $note = new Note($request->all());
        $card->addNote($note, 1);
        return back();
    }

    public function edit(Note $note) {
        return view('notes.edit', compact('note'));
    }

    public function update(Request $request, Note $note) {
        $note->update($request->all());
        return back();
    }
}
