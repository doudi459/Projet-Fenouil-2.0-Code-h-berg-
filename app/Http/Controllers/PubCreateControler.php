<?php

namespace App\Http\Controllers;
use App\Article ;
use App\Publicite;
use App\article_pub;
use Illuminate\Http\Request;

class PubCreateControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arts = Article::all();


        return view('CreerPub',compact('arts'));
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
        try {
            $newpub = new Publicite;
            $newpub->type_papier = $request->valeur_choisie;
            $newpub->titre = $request->titre;
            $newpub->description = $request->contenu;
            $newpub->save();
            $id_pub = $newpub->num_pub;
        }
        catch (\Exception $exception)
        {
            return $exception;
        }

       foreach ($request["User"] as $user)
       {
           $newartpub = new article_pub;
           $newartpub->numéro = intval($user);
           $newartpub->num_pub = $id_pub ;
           $newartpub->save();
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
