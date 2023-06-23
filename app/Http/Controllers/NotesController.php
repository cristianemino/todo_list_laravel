<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notes = Note::all();
        $data = [
            'notes' => $notes,
        ];
        return view('index', $data);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $note = new Note();
        $note->nombre = $request->nombre;
        $note->referencia = $request->referencia;
        $note->descripcion = $request->descripcion;
        $note->save();

        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $note = Note::find($id);
        $data = [
            'note' => $note,
        ];
        
        return view('show', $data);
    }

    public function edit($id)
    {
        $note = Note::find($id);
        $data = [
            'note' => $note,
        ];
    
        return view('edit', $data);
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $note = Note::find($id);
        $note->nombre = $request->nombre;
        $note->referencia = $request->referencia;
        $note->descripcion = $request->descripcion;
        $note->save();

        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $note = Note::find($id);
        $note->delete();

        return redirect()->route('index');
    }
}
