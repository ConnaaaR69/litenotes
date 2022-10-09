<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
    */
    public function index()
    {
        //Fetch notes in order of when they were last updated. Latest First.
        $notes = Note::where('user_id', Auth::id())->latest('updated_at')->paginate(1);

        return view('notes.index')->with('notes', $notes);
    }

    /**
     * Show the form for creating a new resource.
     * 
     * @return \Iluminate\Http\Response
     */
    public function create() 
    {

    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) 
    {
        
    }

    /**
     * Display the specified resource.
     * 
     * @param int $id
     * @return \Iluminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Display the specified resource.
     * 
     * @param int $id
     * @return \Iluminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * 
     * @param \Iluminate\Http\Request $request
     * @param int $id
     * @return \Iluminate\Http\Response
     */

     public function update(Request $request, $id)
     {

     }
    
    /**
     * Remove the specified resource from storage.
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
     {

     }
}   
