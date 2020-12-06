<?php

namespace App\Http\Controllers;

use App\Extrastudents;
use App\Students;
use App\Extras;
use Illuminate\Http\Request;

class ExtrastudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Extrastudents::with('students', 'extra')->get();

        return view('pages/listextra/index')->with([
            'items' => $items,
            'PageTitle' => 'Data List Extra Siswa',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $extra = Extras::all();
        $students = Students::all();
        return view('pages/listextra/create')->with([
            'extra' => $extra,
            'students' => $students,
            'PageTitle' => 'Tambah Siswa',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $extrastudents = new Extrastudents();
        $extrastudents->id_students = $request->get('id_students');
        $extrastudents->id_extra = $request->get('id_extra');
        $extrastudents->save();
        return redirect()->route('extrastudents.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Extrastudents  $extrastudents
     * @return \Illuminate\Http\Response
     */
    public function show(Extrastudents $extrastudents)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Extrastudents  $extrastudents
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        #
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Extrastudents  $extrastudents
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Extrastudents $extrastudents, $id)
    {
        #
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Extrastudents  $extrastudents
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $items = Extrastudents::findOrFail($id);
        $items->delete();

        return redirect()->route('extrastudents.index');
    }
}
