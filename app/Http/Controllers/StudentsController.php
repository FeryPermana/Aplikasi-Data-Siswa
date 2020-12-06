<?php

namespace App\Http\Controllers;

use App\Kelas;
use App\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Students::with('kelas')->get();

        return view('pages/students/index')->with([
            'items' => $items,
            'PageTitle' => 'Data Siswa',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = Kelas::all();
        return view('pages/students/create')->with([
            'kelas' => $kelas,
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
        // $items = Students::with('kelas')->get();
        $students = new Students();
        $students->nama_siswa = $request->get('nama_siswa');
        $students->id_kelas = $request->get('id_kelas');
        $students->no = $request->get('no');
        $students->nis = $request->get('nis');
        $students->save();
        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function show(Students $students)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function edit(Students $students, $id)
    {
        $items = Students::findorFail($id);
        $kelas = Kelas::all();
        return view('pages/students/edit')->with([
            'items' => $items,
            'kelas' => $kelas,
            'PageTitle' => 'Edit Siswa',
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Students $students, $id)
    {
        $students = Students::findOrFail($id);
        $students->nama_siswa = $request->get('nama_siswa');
        $students->id_kelas = $request->get('id_kelas');
        $students->no = $request->get('no');
        $students->nis = $request->get('nis');
        $students->save();
        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function destroy(Students $students, $id)
    {
        $items = Students::findOrFail($id);
        $items->delete();

        return redirect()->route('students.index');
    }
}
