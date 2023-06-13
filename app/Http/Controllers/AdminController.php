<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Trans;
use App\Models\Estimate;


class AdminController extends Controller
{
    public function trans(){
        return view ('admin.trans');
    }
    public function add_transport(Request $request){
        $data= new Trans;
        $data->name=$request->name;
        $data->speciality=$request->speciality;
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalName();
        $request->image->move('transimage', $imagename);
        $data->image=$imagename;
        $data->save();
        return redirect()->back();
    }

     public function view(){
        $data=Trans::all();
        return view('admin.view',compact('data'));
    }
    
    public function deleted($id){
        $data = Trans::find($id);
        $data->delete();
     return redirect()->back();
    }

    public function update($id){
        $data=Trans::find($id);
        return view('admin.update',compact('data'));
    
     }

     public function edit_trans(Request $request,$id){
        $data=Trans::find($id);
        $data->name=$request->name;
        $data->speciality=$request->speciality;
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalName();
        $request->image->move('transimage', $imagename);
        $data->image=$imagename;
        $data->save();
        return redirect()->back();
    }


    public function all_est(){
        $data=Estimate::all();
        return view ('admin.all_est',compact('data'));
    }


    public function approved($id){
        $data = Estimate::find($id);
        $data->status='approved';
        $data->save();
        return redirect()->back();
    }
    public function canceled($id){
        $data = Estimate::find($id);
        $data->status='canceled';
        $data->save();
        return redirect()->back();
    }
    






}
