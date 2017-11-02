<?php

namespace App\Http\Controllers;

use App\Academy;
use App\Http\Requests\StudentRequest;
use App\Service;
use App\Special;
use App\Student;
use App\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class StudentsController extends Controller
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

        $students = Student::all();
        $students->load(['users', 'services', 'academies']);

        return view('students.index', compact('students'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $students = Student::all();
        $service = Service::pluck('name', 'id');
        $academy = Academy::pluck('name', 'id');
        $special = Special::pluck('name', 'id');
        $group = Group::pluck('group_name', 'id');

        return view("students.create", compact('students', 'group', 'service', 'academy', 'special'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentRequest $request)
    {
        $userId = Auth::user()->id;

        $student = new Student();

        $student->firstname = $request->get('firstname');
        $student->lastname = $request->get('lastname');
        $student->birthday = $request->get('birthday');
        $student->group_id = $request->get('group_id');
        $student->code = substr(uniqid(), -5);
        $student->save();


        $student->users()->attach($userId);
        $student->services()->attach($request->input('service'));
        $student->academies()->attach($request->input('academy'));
        $student->specials()->attach($request->input('special'));

        Session::flash('success', "Vous avez bien enregistré l'élève");
        return redirect('eleve/nouveau');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {

        return view("students.show")->with('kid', $student);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        $service = Service::pluck('name', 'id');
        $academy = Academy::pluck('name', 'id');
        $special = Special::pluck('name', 'id');

        return view('students.edit', compact('student', 'service', 'academy', 'special'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Student $student
     * @return \Illuminate\Http\Response
     */
    public function update(StudentRequest $request, Student $student)
    {
        $req = $request->all();

        $student->update($req);
        $student->services()->sync($request->input('service_list'));
        $student->academies()->sync($request->input('academy_list'));
        $student->specials()->sync($request->input('special_list'));

        return redirect('eleve')->with('success', "Le fiche de l'élève a été modifier correctement.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
//       $kid = $student;

        $student->users()->detach();
        $student->academies()->detach();
        $student->services()->detach();
        $student->specials()->detach();
        $student->delete();


        return redirect('eleve')->with('success', "La fiche de l'élève a bien été effacer.");
    }
}
