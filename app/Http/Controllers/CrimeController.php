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


class CrimeController extends Controller
{
    //
    public function index(){
       $crime_types = DB::table('crimes')->get();

       return view('crimes.all',['crimes'=>$crime_types]);
    }

      public function add(){
        return view('crimes.add');
      }

      public function store(Request $request)
      {
          //validation rules
          $validator = Validator::make($request->all(),[
            'date' => 'required|date',
            'location' => 'required|string',
            'whatHappened' => 'required|string',
            'reportedBy' => 'required|string',

            'deleted' => 'required',
          ]);

          //check if validation fails
          if($validator->fails())
          {
            return redirect('crimes.add')->withErrors($validator)->withInput();
          }
          else {
            $date = $request->date;
            $location = $request->location;
            $whatHappened = $request->whatHappened;
            $reportedBy = $request->reportedBy;

            $deleted = $request->deleted;

              //insert array

              $data_insert['date'] = $date;
              $data_insert['location'] = $location;
              $data_insert['whatHappened'] = $whatHappened;
              $data_insert['reportedBy'] = $reportedBy;


              $data_insert['created_at'] = date('Y-m-d H:i:s');



              //insert into DB
              if(DB::table('crimes')->insert($data_insert))
              {
                Session::flash('success', 'Record saved successfully');
                return Redirect::to('crimes');
              }
              else
              {
                Session::flash('error','Something went wrong please try again');
                return Redirect::to('crimes.add');

              }
          }
      }

        public function show($id){
            if($id!=''){
              //$data_update = array('id'=>$id);
              $data_view = array('id'=>$id);

              $crime_types = DB::table('crimes')->where(array('id'=>$id))->get();
              return view('crimes.show',['crimes'=>$crimes]);
            }
        }

        public function edit($id)
      {
          if($id!='')
          {
              $data_view = array('id'=>$id);
              $crime_types = DB::table('crimes')->where($data_view)->get();
              return view('crimes.edit',['crimes' => $crimes]);
          }
      }

        public function update(Request $request, $id){
          //validation rules
          $validator = Validator::make($request->all(),[
            'date' => 'required|date',
            'location' => 'required|string',
            'whatHappened' => 'required|string|200',
            'reportedBy' => 'required|string',

            'deleted' => 'required',

          ]);

          //check if validation fails
          if($validator->fails())
          {
            return redirect('crimes/show/'.$id)->withErrors($validator)->withInput();
          }
          else {
            $date = $request->date;
            $location = $request->location;
            $whatHappened = $request->whatHappened;
            $reportedBy = $request->reportedBy;

            $deleted = $request->deleted;

              $data_update['deleted'] = $deleted;
              $data_update['updated_at'] = date('Y-m-d H:i:s');

              //check for file
              if(Input::file('image')->isValid()){
                $extension = Input::file('image')->getClientOriginalExtension();
                $image_name = Input::file('image')->getClientOriginalExtension();
                $fileName = time().'_.'.$image_name;
                Input::file('image')->move(public_path('uploads').'/',$fileName);





              //update record in DB
              if(DB::table('crimes')->where('id',$id)->update($data_update))
              {
                Session::flash('success', 'Record saved successfully');
                return Redirect::to('crimes');
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
                return Redirect::to('crimes.edit'.$id);
              }
          }
        }

        public function destroy($id){
          if($id!=''){
            if(DB::table(crimes)->where('id',$id)->update(['deleted'=>'Y'])){
              Session::flash('success', 'Record deleted successfully');
              return Redirect::to('crimes');
            }
            else{
              Session::flash('danger', 'Something went wrong. Please try again');
              return Redirect::to('crimes');
            }
          }
        }



}
