<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function sample()
    {

        // ::all(); get all the tables from database
        // ::where(); get specific data from tables from database



        // $data = Students::all();
        // $data = Students::where('id', 1)->get();
        // $data = Students::where('age', '>',  19)->get();
        // $data = Students::where('first_name', 'like', '%bert%')->get();
        // $data = Students::where('age', '>=',  19)->get();
        // $data = Students::where('age', '>=',  19)->orderBy('first_name', 'asc')->get();
        // $data = Students::where('age', '>=',  19)->orderBy('first_name', 'desc')->get();
        // $data = Students::where('age', '>=',  19)->orderBy('first_name', 'asc')->limit(5)->get();


        // $data = DB::table('students')
        //     ->select(DB::raw('count(*) as gender_count, gender'))
        //     ->groupBy('gender')
        //     ->get();

        // $result = compact('data');

        // $data = Students::where('id', 100)->firstOrFail()->get();


        return view('students.index'); // in this line of code get the value of student.view at AppServiceProvider.php
    }
    public function show($id)
    {
        $data = Students::findOrFail($id);
        return view('Students.index', ['students' => $data]);
    }
}
