<?php

namespace App\Http\Controllers;

use App\Exports\userTask;
use App\Exports\userTaskall;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

date_default_timezone_set('Asia/Kolkata');


class UserController extends Controller
{

    public function userReg(Request $req){
        if($req->isMethod('GET')){
            return view('user.reg');
        }
        elseif ($req->isMethod('POST')) {
            $req->validate([
                'name'=>'required',
                'email'=>'required|email',
                'mobile'=>'required'
            ]);
            $email=$req->email;
            $dup=User::where('email','=',$email)->first();
            if (!$dup) {
                User::create($req->all() );
                return redirect(route('user.reg'))->with('success',"Register success go check full data");
            }
            else{
                return redirect(route('user.reg'))->with('error',"sorry all ready register");
            }
 
        }
    }

    // data
    function data(){
        $users=User::paginate(8);
        return view('user.allUser',compact('users'));
    }


    private function userTask($id){
       $user=User::findOrFail($id);
        return view('user.userTask',compact('user'));
    }

    function task(Request $req,$id){
        if($req->isMethod('GET')){
          return  $this->userTask($id);
        }
        elseif($req->isMethod('POST')){
         $req->validate([
            'task'=>'required',
         ]);
         Task::create($req->all());
         return redirect(route('user.task.data'));

        }
    }

        function userTaskData(){
           $task=Task::paginate(8);
           return view('user.taskView',compact('task'));
         
        }

        // export user
        function expUser(){
       
            return Excel::download(new userTask,'user.xlsx');
        }

        function expUserdata(){
            return Excel::download(new userTaskall,'userTaskD.xlsx');

        }
}
