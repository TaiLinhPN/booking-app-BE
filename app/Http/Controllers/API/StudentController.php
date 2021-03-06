<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Support\Facades\Session;
 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class StudentController extends Controller
{
    public function index(){
        $listStudent = Student::all();
        return response() -> json($listStudent);
    }


    public function verify($code)
    {
        $user = Student::where('confirmation_code', $code);

        if ($user->count() > 0) {
            $user->update([
                'confirmed' => 1,
                'confirmation_code' => null
            ]);
            $notification_status = 'Bạn đã xác nhận thành công';
        } else {
            $notification_status ='Mã xác nhận không chính xác';
        }

        return redirect(route('login'))->with('status', $notification_status);
    }

    public function register(Request $request){
        
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'confirm_password' => 'required|same:password',

        ], [
            'name.required' => "Name empty",
            'email.required' => "email empty",
            'email.email' => "Error format email",
            'email.unique' => "Account have exit",
            'password.required' => "password empty",
            'password.min' => "Least 8 character",
            
        ]);

        
        if($validator ->fails())
        {
            return response()->json([
                'validation_errors'=>$validator->errors(),
            ]);
        }


        if($request->option =='student'){
             $user = Student::create([
                'email' =>$request -> email,
                'name' =>$request -> name,
                'address' =>$request -> address,
                'password' =>Hash::make ($request -> password),
            ]);
            $user->save();
            return response()->json([
                'status'=>200,
                
                'message'=>'Register successfully', 
            ]);

            
             
            
        }
        elseif($request->option =='teacher'){
            $user = Teacher::create([
                'email' =>$request -> email,
                'name' =>$request -> name,
                'address' =>$request -> address,
                'password' =>Hash::make ($request -> password),
            ]);
             return response()->json([
                'status'=>200,
                'message'=>'Register successfully', 
            ]);

        }
                 
       

    }
    public function login(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ],
         [
            'name.required' => "Name empty",
            'email.required' => "email empty",
            'password.required' => "password empty",   
        ]
        );
        if($validator ->fails())
        {
            return response()->json([
                'validation_errors'=>$validator->errors(),
            ]);
        }
        if($request->option =='student'){
            $user = Student::where("email" ,$request->email )->where("password" ,$request->password )->get();
            
            if($user->count()>0){
                return Response()->json(
                    [
                            'status'=>200,
                            'username'=>$user[0], 
                            'message'=>'Login successfully', 
                            "success"=>1
                            
                            ]
                    
                 );
            }
             
        }
        elseif($request->option =='teacher'){
            $user = Teacher::where("email" ,$request->email )->where("password" ,$request->password )->get();
            if($user->count()>0){
                return Response()->json(
                    [
                            'status'=>200,
                            'username'=>$user[0], 
                            'message'=>'Login successfully', 
                            "success"=>1
                            ]
                    
                );
            }
             

        }
         
       
        
         
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
    public function getInformationStudent ($id){
        $st = Student::find($id);
        dd($st);
        return response() -> json($st);
        echo('sdhf');
    }
}