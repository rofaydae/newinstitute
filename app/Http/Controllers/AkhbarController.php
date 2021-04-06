<?php

namespace App\Http\Controllers;

use App\Models\Akhbar;
use Illuminate\Http\Request;

class AkhbarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = Akhbar::all();
        return view("news")->with("news", $news);
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
     * @param  \App\Models\Akhbar  $akhbar
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $khabar = Akhbar::find($id);
        return view("khabar")->with("khabar", $khabar);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Akhbar  $akhbar
     * @return \Illuminate\Http\Response
     */
    public function edit(Akhbar $akhbar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Akhbar  $akhbar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Akhbar $akhbar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Akhbar  $akhbar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Akhbar $akhbar)
    {
        //
    }
}
