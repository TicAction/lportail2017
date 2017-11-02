<?php

namespace App\Http\Controllers;

use App\Http\Requests\SchoolRequest;
use App\School;
use App\Schoolboard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class SchoolsController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $schools = School::all();
        $schools->load('schoolboard');

        return view('schools.index', compact('schools'));
    }

    public function show(School $school)
    {


        return view('schools.show', compact('school'));
    }

    public function edit(School $school)
    {

        $schoolboards = Schoolboard::pluck('schoolboard_name', 'id');

        return view('schools.edit', compact('school','schoolboards'));

    }

    public function store(SchoolRequest $request)
    {
        $user_id = Auth::user()->id;
        $school = new School();

        $school->school_name = $request->get('school_name');
        $school->school_adress = $request->get('school_adress');
        $school->school_email = $request->get('school_email');
        $school->school_phone = $request->get('school_phone');
        $school->schoolboard_id = $request->get('schoolboard_id');
        $school->save();

        $school->users()->attach($user_id);

        return redirect('ecole');
    }

    public function create()
    {
        $school = new School();

        $schoolboards = Schoolboard::pluck('schoolboard_name', 'id');

        return view('schools.create', compact('school','schoolboards'));
    }

    public function update(SchoolRequest $request, School $school)
    {
        $user_id = Auth::user()->id;
        $req = $request->all();

       $school->update($req);


        $school->users()->sync($user_id);


        return redirect('ecole');

    }

    public function destroy(School $school)
    {
        $school->users()->detach();
        $school->delete();

        Session::Flash('success','Vous avez bien effacer votre école');
        return redirect('ecole');
    }
}

