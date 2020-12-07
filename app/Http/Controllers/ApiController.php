<?php

namespace App\Http\Controllers;

use App\Models\Alert;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ApiController extends Controller
{
    public function listAlert(){
        $alerts=Alert::orderBy('created_at','desc')->get();
        return json_encode($alerts);
    }

    public function register(Request $request){
        $user = User::create([
            'nom' => $request['nom'],
            'prenom' => $request['prenom'],
            'tel' => $request['tel'],
            'email' => $request['email'],
            'ville' => $request['ville'],
            'groupe_sanguin' => $request['groupe_sanguin'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
    
        $this->validate($request, [
            'nom' => 'required',
            'prenom' => 'required',
            'tel' => 'required',
            'ville' => 'required',
            'password' => 'required',
            'groupe_sanguin' => 'required'
        ]);

        return $user->createToken($request->device_name)->plainTextToken;
    }


    public function addAlert(Request $request){

        $alert= new Alert;
        $alert->date_alert= Date('Y-m-d');
        $alert->groupe_sanguin=$request->groupe_sanguin;
        $alert->ville= $request->ville;
        $alert->position=$request->position;
        $alert->message= $request->message;
        $alert->tel= $request->tel;
        $alert->save();
       

        return 'ok';
    }

    public function alertDetail($id){

        $alert= Alert::find($id);
        return json_encode($alert);
   
    }
}
