<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Trans;
use App\Models\Estimate;
use App\Models\Opinion;

class HomeController extends Controller
{
    public function index(){
        if(Auth::id()){
            return redirect('home');
        }
        else{
            $data= Trans::all();
            
        return view('user.home',compact('data'));
        }
    }
    
    public function redirect(){
        if (Auth::id()){
            if(Auth::user()->usertype=='0'){
              
                $data= Trans::all();
              return view('user.home',compact('data'));
            }
            else{
                return view('admin.home');
            }

        }
        else{
            return redirect()->back();
        }
    }


public function view_trans(){
     $data= Trans::all();
        return view('user.fight',compact('data'));
    }


public function service(){
    return view('user.service');
}


public function estimate(Request $request){
    $data = new Estimate;
    $data->name = $request->name;
    $data->email = $request->email;
    $data->size = $request->size;
    $data->type = $request->type;
    $data->city = $request->city;
    $data->delivery = $request->delivery;
    $data->message = $request->message;
    $data->status='In progress';
    if(Auth::id()){
        $data->user_id=Auth::user()->id;
        }
    $data->save();

    return redirect()->back()->with('message','Estimate Request Successful .We Will Contact With You Soon ');;
}
 public function my_est(){
    if(Auth::id()){
        $user_id = Auth::user()->id;
        $data = Estimate::where('user_id',$user_id)->get();
        return view('user.my_est',compact('data'));
    }
   else{
    return redirect()->back();
   }
 }

public function delete($id){
  $data=estimate::find($id);
  $data->delete();
  return redirect()->back();
}

public function opinion(){
    return view('user.opinion');
}

public function send_opinion(Request $request){
        $data = new Opinion;
        $data->name = $request->name;
        $data->opinion = $request->opinion;
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalName();
        $request->image->move('opinionimage', $imagename);
        $data->image=$imagename;
        $data->save();  
    return redirect()->back()->with('message','Opinion Sent Successful .We Will Contact With You Soon ');
    
   
}
















}
