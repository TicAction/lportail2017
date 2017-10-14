<?php

namespace App\Http\Controllers;

use App\Profil;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProfilsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profils = Profil::all();

        return view('profils.index', compact('profils'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $service = Service::pluck('name','id');

        return view('profils.create',compact('service'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     dd($request->all());

        Session::flash('success', "Vous avez bien enregistré l'élève");

        return redirect("/profil");
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Profil $profil)
    {
        $profil = Profil::find($profil);

        return view('profils.show', compact('profil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Profil $profil)
    {

        return view('profils.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profil $profil)
    {


        return redirect('/profil')->with('success', 'Le profil a été modifier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profil $profil)
    {
        Profil::destroy($profil);

        return redirect('/profil')->with('success', 'Le profil a été effacer.');
    }
}
