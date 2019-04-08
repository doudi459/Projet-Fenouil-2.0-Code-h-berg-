<?php

namespace App\Http\Controllers;
use App\Commande;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EditeAnomaliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $user = null;
        return view('editéAnomali',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {



        $data = [
            "object" => $request['sujet'],
            "email" => $request['email'],
            "titre" => $request['titre'],
            "Contenu" => $request["contenu"]
        ];


        Mail::send('email.edit',$data , function ($message) use($data)
        {

           $message->to($data['email'])->subject($data['object']);
           $message->from('Fenouil@anomali.com','traitement des anomalis');
        });
        return redirect('/dashbord/editanomali');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comme = Commande::find($id);
        $user = User::find($comme->id_indevidu);
        return view('editéAnomali',compact('user'));
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
}
