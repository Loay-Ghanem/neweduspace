<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use app\Models\Subject;

class SubjectController extends Controller
{
    private function getdata(){
         return [
            ["subject_id"=> 1,"subject_name" => "chimestry"],
            ["subject_id"=> 2,"subject_name" => "math"],
            ["subject_id"=> 3,"subject_name" => "calculas"],    
         ];

    }
    public function index()
    {
      return view('subject',['subjects' =>self::getdata ()]);
    }

 
    public function create()
    {
        // return view('subject.create');
    }

   
    public function store(Request $request)
    {
        // $subject = new Subject();
    }

    
    public function show(string $id)
    {
        $subjects=self::getdata();
    }

    
    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    
    public function destroy(string $id)
    {
        //
    }
}
