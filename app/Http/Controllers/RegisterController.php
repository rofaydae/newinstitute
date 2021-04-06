<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $register=new Register();
        $register->ar_firstName=$request->arfname;
        $register->ar_familyName=$request->arlname;
        $register->ar_secondName=$request->arsname;
        $register->en_firstName=$request->enfname;
        $register->en_familyName=$request->enlname;
        $register->en_secondName=$request->ensname;
        $register->birthday=$request->birthday;
        $register->city=$request->city;
        $register->country=$request->country;
        $register->nationality=$request->nationality;
        $register->adress=$request->adress;
        $register->phone=$request->phone;
        $register->email=$request->email;
        $register->diploma=$request->diploma;
        $register->diploma_country=$request->dcountry;
        $register->speciality=$request->speciality;
        $register->doctorat_adress=$request->dctadress;
        $register->doctorat_file=$request->dctfile;
        $register->passport=$request->passport;
        $register->picture=$request->pdp;
        $register->save();
        return redirect("/");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function show(Register $register)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function edit(Register $register)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Register $register)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function destroy(Register $register)
    {
        //
    }
}
