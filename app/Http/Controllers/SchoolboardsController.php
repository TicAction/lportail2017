<?php

namespace App\Http\Controllers;

use App\Schoolboard;
use Illuminate\Http\Request;

class SchoolboardsController extends Controller
{
    public function index()
    {
        return view('schoolboards.index');
    }

    public function show(Schoolboard $schoolboard)
    {
        return view('schoolboards.show',compact('schoolboard'));
    }
}
