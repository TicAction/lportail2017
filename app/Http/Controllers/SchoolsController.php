<?php

namespace App\Http\Controllers;

use App\School;
use Illuminate\Http\Request;

class SchoolsController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $schools = School::all();

        return view('schools.index', compact('schools'));
    }

    public function show($id)
    {
        $school = School::findOrFail($id);

        return view('schools.show', compact('school'));
    }

    public function edit($id)
    {
        $school = School::findOrFail($id);

        return view('schools.create', compact('school'));

    }

    public function store(Request $request)
    {
        School::create($request->all());

        return redirect('school');
    }

    public function create()
    {
        $school = new School();

        return view('schools.create', compact('school'));
    }

    public function update(Request $request, $id)
    {
        $school = School::findOrFail($id);
        $school->update($request->all());

        return redirect('school');

    }

    public function destroy()
    {

    }
}

