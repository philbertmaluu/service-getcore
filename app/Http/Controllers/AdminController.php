<?php

namespace App\Http\Controllers;

use App\Models\Service;

use App\Models\subscribe;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function form_view(){

        return view('admin.form_view');
    }

    public function addservice(Request $request){

      $service = new service;
      $service->name = $request->name;
      $service->price = $request->price;
      $service->description = $request->Description;
      $service->save();
      return redirect()->back();
    }

    public function showsubscribers(){
      
      $data = subscribe::all();
      return view('admin.showsubscribers',compact('data'));
    }

    public function canceled($id){

      $data = subscribe::find($id);
      $data ->status='canceled';
      $data ->save();
      return redirect()->back();
  }

  public function allservices(){

    return view('admin.allservices');
  }
}
