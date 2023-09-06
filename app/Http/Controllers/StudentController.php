<?php

// use Illuminate\Support\Facades\DB;
// use function PHPUnit\Framework\isEmpty;


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

use function PHPUnit\Framework\isEmpty;

class StudentController extends Controller
{
    
    public function editForm(int $id){
        if(DB::table('students')->where('st_id',$id)->exists()){
            $record = DB::table('students')->where('st_id',$id)->get();
            return view('pages.editForm',['data'=>$record[0]]);
        }else{
            return abort(404,"Record not found");
        }  
    }

    public function updateStudent(int $id, string $name,int $age, string $email, int $city){
        $data =['name'=>$name,'age'=>$age,'email'=>$email,'city'=>$city ];

        $result=db::table('students')->where('st_id',$id)->update($data);
        if($result==1){
            echo json_encode(['message'=>'data successfully Updated']);
        }else{
            echo json_encode(['message'=>'Failed to update record']);
        }
    }  

    // public function addStudent(string $name,int $age, string $email, int $city){
    //     $data =['name'=>$name,'age'=>$age,'email'=>$email,'city'=>$city ];
    //     $result=db::table('students')->insertOrIgnore($data);

    //     if($result==1){
    //         echo json_encode(['message'=>'data successfully inserted']);
    //     }else{
    //         echo json_encode(['message'=>'Email already exists']);
    //     }
    // } 

    public function addStudent(Request $request){
        $data =['name'=>$name,'age'=>$age,'email'=>$email,'city'=>$city ];
        $result=db::table('students')->insertOrIgnore($data);

        if($result==1){
            echo json_encode(['message'=>'data successfully inserted']);
        }else{
            echo json_encode(['message'=>'Email already exists']);
        }
    }     
    
    public function studentDelete(int $id){
        if(DB::table('students')->where('st_id',$id)->exists()){
            $result = DB::table('students')->where('st_id',$id)->delete();
            if($result){
                return redirect()->route('showStudents');
            }
        }else{
            return abort(404,"Record not found");
        }  
    }         

    public function showStudents(){

        //Retrive data from database
        $json = DB::table('students')->limit(10)->get();
        // dd($json);
        $records = json_decode($json,true);

        //Retrive datafrom json file
        // $path = resource_path();
        // $cpath = $path."/json/students.json";     
        // $json = File::get($cpath);
        // $records = json_decode($json,true);

        return view('pages.studentsTable',['data'=>$records]);
    }

    public function studentDetail(int $id){

        //Retrive data from json file
        // $path = resource_path();
        // $cpath = $path."/json/students.json";     
        // $json = File::get(path:$cpath);
        // $records = json_decode($json,true);
        // $record=[];
        // foreach ($records as $key => $value) {
        //     if($value['st_id']==$id){
        //         $record = $value;    
        //         return view('pages.studentDetail',['data'=>$record]);
        //     }
        // }
        // echo "<p class='error_msg'>Record Not found</p>";

        //Retrive data from database
        if(DB::table('students')->where('st_id',$id)->exists()){
            $record = DB::table('students')->where('st_id',$id)->get();
            return view('pages.studentDetail',['data'=>$record[0]]);
        }else{
            return abort(404,"Record not found");
        }  
    } 
    


    public function model(){
        return view('pages.model');
    } 
}


?>