<?php

namespace App\Http\Controllers;

use App\Behavior;
use App\Http\Requests\BehaviorRequest;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use function Sodium\compare;

class BehaviorsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $observations= Behavior::all();
         $observations->load('students');


        return view("behaviors.index",compact('observations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_id = Auth::user()->id;
        $observation = new Behavior();


        $students = DB::table('student_user')
            ->join('students','id','=','student_user.student_id')
            ->where('user_id','=',$user_id)
            ->pluck('fullname','id');


     return view('behaviors.create',compact('observation','students'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BehaviorRequest $request)
    {

        $observation = new Behavior();


        $observation->observation_date = $request->get('observation_date');
        $observation->observation_content = $request->get('observation_content');
        $observation->save();

        $observation->students()->attach($request->input('student'));

        Session::flash('success', "Vous avez bien enregistré l'élève");
        return redirect('observation');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Behavior  $behavior
     * @return \Illuminate\Http\Response
     */
    public function show(Behavior $behavior)
    {

        return view("observation.show")->with('kid', $behavior);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Behavior  $behavior
     * @return \Illuminate\Http\Response
     */
    public function edit(Behavior $behavior)
    {

        $user_id = Auth::user()->id;
        $students = DB::table('student_user')
            ->join('students','id','=','student_user.student_id')
            ->where('user_id','=',$user_id)
            ->pluck('fullname','id');

        return view('behaviors.edit',compact('behavior','students'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Behavior  $behavior
     * @return \Illuminate\Http\Response
     */
    public function update(BehaviorRequest $request, Behavior $behavior)
    {
        $req = $request->all();

        $behavior->update($req);
        $behavior->students()->sync($request->input('student'));

        Session::flash('success', "Vos modification ont été faites");
        return redirect('eleve');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Behavior  $behavior
     * @return \Illuminate\Http\Response
     */
    public function destroy(Behavior $behavior)
    {
        //
    }
}
