<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class StudentController extends Controller
{
    public function show(){
        
        $students = DB::table('students')->orderBy('id')
        // ->get()
        // return $students;
                        ->cursorPaginate(5);
 
        return view('allStudents',['data'=>$students]);
    
     }

     public function showStudent(string $id){

        $students = DB::table('students')->where('id',$id)->get();
        return view('student',['data'=>$students]);

     }

     public function addStudent(Request $req){

        $req->validate([

            'studentName'=>'required',
            'studentEmail'=>'required|Email'

        ]);

        $student=DB::table('students')
        // For Insert
                    ->insertOrIgnore([
                        'name'=> $req->studentName,
                        'email'=>$req->studentEmail
                    ]);
                
                    if($student){
                        return redirect()->route('home');
                    }else{
                        echo "<h2>Data not added or repeated data</h2>";
                    }
     }


     public function updateStudent(Request $req, $id){
        // return $req;
        $student=DB::table('students')
                    ->where("id",$id)
                    ->update([

                            "name"=>$req->studentName,
                            "email"=>$req->studentEmail
                        ]);

                    if($student){
                        return redirect()->route('home');
                        // echo "<h2>Data update Successfully</h2>";
                    }else{
                        echo "<h2>Data not updated</h2>";
                    }
     }


     public function updatePage($id){
        // $student=DB::table('students')
        //             ->where("id",$id)
        //             ->get();
        //             return $student;
        $student= DB::table('students')->find($id);
        return view('updateStudent',['data'=>$student]);
        
     }


     public function deleteStudent(string $id){

        $student=DB::table('students')
                    ->where("id",$id)
                    ->Delete();

                    if($student){
                        return redirect()->route('home');
                        // echo "<h2>Data Deleted Successfully</h2>";
                    }else{
                        echo "<h2>Data not found</h2>";
                    }
     }

     
}
