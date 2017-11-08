<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mod;
use App\Topic;
use DB;
class ModsController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $mods = Mod::all();
        return view('mods.index')->with('mods', $mods);
    }

    public function english()
    {    $mods = DB::select('SELECT * FROM mods WHERE code LIKE "en%"');
        return view('subjects.english')->with('mods', $mods);
    }

    public function computerscience()
    {    $mods = DB::select('SELECT * FROM mods WHERE code LIKE "cs%"');
        return view('subjects.computerscience')->with('mods', $mods);
    }

    public function maths()
    {   $mods = DB::select('SELECT * FROM mods WHERE code LIKE "mt%"');
        return view('subjects.maths')->with('mods', $mods);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mod= Mod::find($id);
        return view('mods.show')->with('mod', $mod);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
