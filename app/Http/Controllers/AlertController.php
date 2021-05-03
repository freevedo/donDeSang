<?php

namespace App\Http\Controllers;

use App\Helpers\Sms;
use App\Mail\test;
use App\Models\Alert;
use App\Models\User;
use App\Notifications\AlertSent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AlertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alerts= Alert::all();
       // $this->sendSMS();
        return View('pages.list_alert')->with(['alerts'=>$alerts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create_alert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $alert= new Alert;

        $alert->user_id=Auth::user()->id;
        $alert->tel=$request->tel;
        $alert->groupe_sanguin=$request->groupe_sanguin;
        $alert->ville= $request->ville;
        $alert->position= $request->position;
        $alert->message=$request->message;
        $alert->date_alert=Date('Y-m-d');

        $alert->save();

        $users= User::all();

       // $this->sendSMS($request['phone'], $request['message']);
        foreach($users as $user){
            if($user->compatible($alert)){
                $user->notify(new AlertSent($user,$alert));
                //Mail::to($user->email)->send(new test($user,$alert));
            }

        }
        return redirect('/alert/create')->with('success','l\'alerte a ete enregistrer, meilleur sante a votre patient');

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function send(Request $request)
    {
        $this->validate($request, [
            'phone' => 'required|numeric',
            'message' => 'required|max:255',
        ]);

       // $this->sendSMS($request['phone'], $request['message']);

        return redirect(route('message.create'));
    }

    public function sendSMS()
    {
        $config = array(
            'clientId' => config('app.clientId'),
            'clientSecret' =>  config('app.clientSecret'),
        );

        $osms = new Sms($config);

        $data = $osms->getTokenFromConsumerKey();
        $token = array(
            'token' => $data
        );


        $response = $osms->sendSms(
        // sender
            'tel:+22665104264',
            // receiver
            'tel:+22672828135',
            // message
            'dada',
            'Devscom'
        );
    }
}

