<?php

namespace App\Http\Controllers;

use App\Extras;
use Illuminate\Http\Request;

class ExtrasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Extras::all();

        return view('pages/extra/index')->with([
            'items' => $items,
            'PageTitle' => 'Data Extra',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages/extra/create')->with([
            'PageTitle' => 'Tambah Extra',
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
        $extra = new Extras();
        $extra->nama_extra = $request->get('nama_extra');
        $extra->save();
        return redirect()->route('extra.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Extras  $extras
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $items = Extras::findorFail($id);
        return view('pages/extra/edit')->with([
            'items' => $items,
            'PageTitle' => 'Edit extra',
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Extras  $extras
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $items = Extras::findorFail($id);
        return view('pages/extra/edit')->with([
            'items' => $items,
            'PageTitle' => 'Edit extra',
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Extras  $extras
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Extras $extras, $id)
    {
        $extras = Extras::findOrFail($id);
        $extras->nama_extra = $request->get('nama_extra');
        $extras->save();
        return redirect()->route('extra.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Extras  $extras
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $items = Extras::findOrFail($id);
        $items->delete();

        return redirect()->route('extra.index');
    }
}
