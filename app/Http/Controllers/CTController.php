<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Redirect;
use Session;
use File;


class CTController extends Controller
{
  //this controller is for crime types view folder.
  public function index(){
     $crime_types = DB::table('crime_types')->where(['deleted'=>'N'])->get();
     return view('crime_types.all',['crime_types'=>$crime_types]);
  }

    public function add(){
      return view('crime_types.add');
    }

    public function store(Request $request)
    {
        //validation rules
        $validator = Validator::make($request->all(),[
          'name' => 'required|string|max:255',
          'crimeType' => 'required|string',
          'image.*' => 'image|mimes:jpeg,png,jpg|max:2000',
          'occupation' => 'required|string',
          'contact' => 'required|string',
          'address' => 'required|string',
          'gender' => 'required|string',

          'license' => 'required|string|max:7|unique:crime_types',
          'make' => 'required|string|max:12',
          'model' => 'required|string',
          'insurance' => 'required|string',
          'engine' => 'required|string',
          'chasis' => 'required|string',
          'engine_size' => 'required|string',
          'transimission' => 'required|string',
          'fuel' => 'required|string',
          'deleted' => 'required',
        ]);

        //check if validation fails
        if($validator->fails())
        {
          return redirect('crime_types/add')->withErrors($validator)->withInput();
        }
        else {
          $name = $request->name;
          $crimeType = $request->crimeType;
          $image = $request->image;
          $occupation = $request->occupation;
          $contact = $request->contact;
          $address = $request->address;
          $gender = $request->gender;

          $license = $request->license;
          $make = $request->make;
          $model = $request->model;
          $insurance = $request->insurance;
          $engine = $request->engine;
          $chasis = $request->chasis;
          $engine_size = $request->engine_size;
          $transimission = $request->transimission;
          $fuel = $request->fuel;
          $deleted = $request->deleted;

            //insert array

            $data_insert['name'] = $name;
            $data_insert['crimeType'] = $crimeType;
            $data_insert['image'] = $image;
            $data_insert['occupation'] = $occupation;
            $data_insert['contact'] = $contact;
            $data_insert['address'] = $address;
            $data_insert['gender'] = $gender;

            $data_insert['license'] = $license;
            $data_insert['make'] = $make;
            $data_insert['model'] = $model;
            $data_insert['insurance'] = $insurance;
            $data_insert['engine'] = $engine;
            $data_insert['chasis'] = $chasis;
            $data_insert['engine_size'] = $engine_size;
            $data_insert['transimission'] = $transimission;
            $data_insert['fuel'] = $fuel;
            $data_insert['deleted'] = $deleted;
            $data_insert['created_at'] = date('Y-m-d H:i:s');



            //insert into DB
            if(DB::table('crime_types')->insert($data_insert))
            {
              Session::flash('success', 'Record saved successfully');
              return Redirect::to('crime_types');
            }
            else
            {
              Session::flash('error','Something went wrong please try again');
              return Redirect::to('crime_types.add');

            }
        }
    }

      public function show($id){
          if($id!=''){
            //$data_update = array('id'=>$id);
            $crime_types = DB::table('crime_types')->where(array('id'=>$id))->get();
            return view('crime_types.show',['crime_types'=>$crime_types]);
          }
      }

      public function edit($id)
    {
        if($id!='')
        {
            $data_view = array('id'=>$id);
            $crime_types = DB::table('crime_types')->where($data_view)->get();
            return view('crime_types.edit',['crime_types' => $crime_types]);
        }
    }

      public function update(Request $request, $id){
        //validation rules
        $validator = Validator::make($request->all(),[
          'name' => 'required|string|max:255',
          'crimeType' => 'required|string',
          'image.*' => 'image|mimes:jpeg,png,jpg|max:2000',
          'occupation' => 'required|string',
          'contact' => 'required|string',
          'address' => 'required|string',
          'gender' => 'required|string',

          'license' => 'required|string',
          'make' => 'required|string',
          'model' => 'required|string',
          'insurance' => 'required|string',
          'engine' => 'required|string',
          'chasis' => 'required|string',
          'engine_size' => 'required|string',
          'transimission' => 'required|string',
          'fuel' => 'required|string',
          'deleted' => 'required',
        ]);

        //check if validation fails
        if($validator->fails())
        {
          return redirect('crime_types/show/'.$id)->withErrors($validator)->withInput();
        }
        else {
          $name = $request->name;
          $crimeType = $request->crimeType;
          $image = $request->image;
          $occupation = $request->occupation;
          $contact = $request->contact;
          $address = $request->address;
          $gender = $request->gender;

          $license = $request->license;
          $make = $request->make;
          $model = $request->model;
          $insurance = $request->insurance;
          $engine = $request->engine;
          $chasis = $request->chasis;
          $engine_size = $request->engine_size;
          $transimission = $request->transimission;
          $fuel = $request->fuel;

            $data_update['deleted'] = $deleted;
            $data_update['updated_at'] = date('Y-m-d H:i:s');

            //check for file
            if(Input::file('image')->isValid()){
              $extension = Input::file('image')->getClientOriginalExtension();
              $image_name = Input::file('image')->getClientOriginalExtension();
              $fileName = time().'_.'.$image_name;
              Input::file('image')->move(public_path('uploads').'/',$fileName);




              $data_update['name'] = $name;
              $data_update['crimeType'] = $crimeType;
              $data_update['image'] = $image;
              $data_update['occupation'] = $occupation;
              $data_update['contact'] = $contact;
              $data_update['address'] = $address;
              $data_update['gender'] = $gender;

              $data_update['license'] = $license;
              $data_update['make'] = $make;
              $data_update['model'] = $model;
              $data_update['insurance'] = $insurance;
              $data_update['engine'] = $engine;
              $data_update['chasis'] = $chasis;
              $data_update['engine_size'] = $engine_size;
              $data_update['transimission'] = $transimission;
              $data_update['fuel'] = $fuel;


            //update record in DB
            if(DB::table('crime_types')->where('id',$id)->update($data_update))
            {
              Session::flash('success', 'Record saved successfully');
              return Redirect::to('crime_types');
            }
            else
            {
              Session::flash('error','Something went wrong please try again');
              return Redirect::to('/show/'.$id);
            }
          }
            else
            {
              Session::flash('error','Something went wrong please try again');
              return Redirect::to('crime_types.edit'.$id);
            }
        }
      }

      public function destroy($id){
        if($id!=''){
          if(DB::table(crime_types)->where('id',$id)->update(['deleted'=>'Y'])){
            Session::flash('success', 'Record deleted successfully');
            return Redirect::to('crime_types');
          }
          else{
            Session::flash('danger', 'Something went wrong. Please try again');
            return Redirect::to('crime_types');
          }
        }
      }
}
