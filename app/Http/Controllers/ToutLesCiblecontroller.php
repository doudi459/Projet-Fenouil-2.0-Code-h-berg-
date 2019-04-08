<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cible_routage;
use App\individu_cible;
use App\User;
use Illuminate\Support\Facades\DB;

class ToutLesCiblecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arts = Cible_routage::all();
        return view('ToutLesCible',compact('arts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

        try {
            $users = individu_cible::all()->where("id_cible", "=", $id);
            $alluser = [];
            foreach ($users as $user) {
                $use = User::find($user->id_indevidu);
                array_push($alluser, $use);

            }
        }
        catch (\Exception $exception)
        {
            return $exception;
        }
       return $alluser;



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
        $type =$request->_method;


        if($type == "PUT")
        {
            $cible = Cible_routage::find($id);
            $cible->etat = "Accepté";
            $cible->save();
        }
        if($type == "PATCH")
        {

            $cible = Cible_routage::find($id);
            $cible->etat = "Refusé";
            $cible->save();
        }
        return redirect("/dashbord/ToutLesCible/");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete('DELETE FROM `individu_cible` WHERE id_cible = ? ',[$id]);
        $cible = Cible_routage::find($id);
        $cible->delete();
        return redirect("/dashbord/ToutLesCible/");
    }
}
