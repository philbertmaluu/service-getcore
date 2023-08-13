<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Service;
use App\Models\Subscribe;


class HomeController extends Controller
{
    //
    public function redirect(){

       if(Auth::id()){

        if(Auth::user()->user_type==0){

            $service  =  service::all();
            $userid=Auth::user()->id;
            $subscriptions = subscribe::where('user_id',$userid)->get();

            return view('user.home',compact('service','subscriptions'));
        }else{
            return view('admin.home');
        }

       }else{
        return  redirect()->back();
       }
    }


    public function index(){
        

        if(Auth::id()){
            return redirect('home');
        }else{

            $service  =  service::all();
            return view('user.home',compact('service'));
        }
       
    }

    // public function subscribe(Request $request){
    //          $data = new subscribe;

    //          $data->name = $request->name;
    //          $data->service_name = $request->service_name;
    //          $data->date = $request->date;
    //          $data->time = $request->time;
    //          $data->duration = $request->duration;

    //          if(Auth::user()->user_type==0){
    //          $data->status = "Wait for email notification";
    //          }else{
    //          $data->status = "Send me email notification";  
    //          }
    //          $data->user_id = Auth::user()->id; 

    //          $data->save();
             
    //          return redirect()->back();

    // }

    public function viewsub(){
        
         if(Auth::id()){
            
            $userid=Auth::user()->id;
            $subscriptions = subscribe::where('user_id', $userid)->get();

            return view('user.home',compact('subscriptions'));
         }else{
            return redirect()->back();
         }
        
       
    }
    public function cancel_sub($id){

        // dd("Inside cancel_sub method with ID: " . $id);

        // $data = subscribe::find($id);
        // if (!$data) {
        //     dd("Subscription not found with ID: " . $id);
        // }
    
        // $data->delete();
    
        // return redirect()->back();

       $data = subscribe::find($id);
       $data->delete();

       return redirect()->back();
    }

    
}
