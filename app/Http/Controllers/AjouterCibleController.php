<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Cible_routage;
use App\individu_cible;
use mysql_xdevapi\Exception;

class AjouterCibleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arts = User::all()->where('Fonction','=',null);

        return view('AjouterCible',compact('arts'));
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

            $creat = new Cible_routage;
                $rq=$request->all();


            if($rq['age'] != NULL)
            {

                $creat->age = $request['age'];
            }
            if($rq['adress'] != NULL)
            {
                $creat->adress = $request['adress'];
            }
            if($rq['categori'] != NULL)
            {
                $creat->socio_pro = $request['categori'];
            }

            try
            {
                $creat->etat = "en attente";
                $creat->save();

            }catch (\Exception $exception){
                return $exception;
            }



        foreach ($rq['User'] as $itemelem)
        {

            $createlem = new individu_cible;
            $createlem->id_cible = $creat->num_cible;
            $createlem->id_indevidu = intval($itemelem);
            try {
                $createlem->save();
            }catch (\Exception $exception)
            {
                return $exception;
            }


        }

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
}
