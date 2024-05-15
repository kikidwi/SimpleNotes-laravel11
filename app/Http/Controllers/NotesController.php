<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\mynotes;
use DB;

class NotesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notes = DB::table('mynotes')->get();
        // return $notes;
        return view('home', compact('notes'));
    }

    public function insertData(Request $request){
        mynotes::create([
            'judul' => $request->judulNotes,
            'isi'   => $request->isiNotes
        ]);

        return redirect()->route('home');
    }

    public function delete($id){

        $idNote = DB::table('mynotes')->where('id', $id);
        $idNote->delete();
        return redirect()->route('home')->with('success', 'Item berhasil dihapus');
    }

    // public function getData(){

    // }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(string $id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(string $id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, string $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(string $id)
    // {
    //     //
    // }
}
