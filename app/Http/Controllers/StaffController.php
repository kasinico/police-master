<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\User;
use Redirect;
use Session;
use File;

class StaffController extends Controller
{

  public function index(){
     $staff = DB::table('users')->get();
     return view('staff.all',['staff'=>$staff]);
  }

    public function add(){
      return view('staff.add');
    }

    public function store(Request $request)
    {
        //validation rules
        $validator = Validator::make($request->all(),[
          'name' => 'required|string|max:255',
          'email' => 'required|string|email|max:255|unique:users',
          'gender' => 'required|string',
          'location' => 'required|string',
          'password' => 'required|string|min:6|confirmed',
          'role' => 'required|string',
          'image.*' => 'image|mimes:jpeg,png,jpg|max:2000',
        ]);

        //check if validation fails
        if($validator->fails())
        {
          return redirect('staff/add')->withErrors($validator)->withInput();
        }
        else {
          $name = $request->name;
          $email = $request->email;
          $gender = $request->gender;
          $location = $request->location;
          $password = $request->password;
          $role = $request->role;
          $gender = $request->gender;
          $image = $request->image;

          //check for file
          if(Input::file('image')->isValid()){
            $extension = Input::file('image')->getClientOriginalExtension();
            $image_name = Input::file('image')->getClientOriginalExtension();
            $fileName = time().'_.'.$image_name;
            Input::file('image')->move(public_path('uploads').'/',$fileName);

            //insert array
            $data_insert['name'] = $name;
            $data_insert['email'] = $email;
            $data_insert['password'] = Hash::make($password);
            $data_insert['role'] = $role;
            $data_insert['gender'] = $gender;
            $data_insert['location'] = $location;
            $data_insert['image'] = $fileName;
            $data_insert['created_at'] = date('Y-m-d H:i:s');

            //insert into DB
            if(DB::table('users')->insert($data_insert))
            {
              Session::flash('success', 'Record saved successfully');
              return Redirect::to('/staff');
            }
            else
            {
              Session::flash('error','Something went wrong please try again');
              return Redirect::to('/staff.add');
            }
          }
          else{
            Session::flash('error','Upload file is not valid. Please check the image size or extension');
            return Redirect::to('/staff.add');
          }
        }
    }

      public function show($id){
          if($id!=''){
            //$data_update = array('id'=>$id);

            $staff = DB::table('users')->where(array('id'=>$id))->get();
            return view('staff.show',['staff'=>$staff]);
          }
      }

      public function edit($id)
    {
        if($id!='')
        {
            $data_view = array('id'=>$id);
            $staff = DB::table('users')->where($data_view)->get();
            return view('staff.edit',['staff' => $staff]);
        }
    }

      public function update(Request $request, $id){
        //validation rules
        $validator = Validator::make($request->all(),[
          'name' => 'required|string|max:255',
          'email' => 'required|string|email|max:255|unique:users',
          'gender' => 'required|string',
          'location' => 'required|string',
          'password' => 'required|string|min:6|confirmed',
          'role' => 'string|min:1',
          'image.*' => 'image|mimes:jpeg,png,jpg|max:2000',
        ]);

        //check if validation fails
        if($validator->fails())
        {
          return redirect('/show/'.$id)->withErrors($validator)->withInput();
        }
        else {
          $name = $request->name;
          $email = $request->email;
          $gender = $request->gender;
          $location = $request->location;
          $password = $request->password;
          $role = $request->role;
          $gender = $request->gender;
          $image = $request->image;

          //check for file
          if(Input::file('image')->isValid()){
            $extension = Input::file('image')->getClientOriginalExtension();
            $image_name = Input::file('image')->getClientOriginalExtension();
            $fileName = time().'_.'.$image_name;
            Input::file('image')->move(public_path('uploads').'/',$fileName);

            $data_update['name'] = $name;
            $data_update['email'] = $email;
            $data_update['password'] = Hash::make($password);
            $data_update['role'] = $role;
            $data_update['gender'] = $gender;
            $data_update['location'] = $location;
            $data_update['image'] = $fileName;
            $data_update['updated_at'] = date('Y-m-d H:i:s');

            //update record in DB
            if(DB::table('users')->where('id',$id)->update($data_update))
            {
              Session::flash('success', 'Record saved successfully');
              return Redirect::to('staff');
            }
            else
            {
              Session::flash('error','Something went wrong please try again');
              return Redirect::to('/show/'.$id);
            }
          }
          else{
            Session::flash('error','Upload file is not valid. Please check the image size or extension');
            return Redirect::to('/staff.edit');
          }
        }
      }

      public function destroy($id){
        if($id!=''){
          if(DB::table(users)->where('id',$id)->update(['deleted'=>'Y'])){
            Session::flash('success', 'Record deleted successfully');
            return Redirect::to('staff');
          }
          else{
            Session::flash('danger', 'Something went wrong. Please try again');
            return Redirect::to('staff');
          }
        }
      }
}
