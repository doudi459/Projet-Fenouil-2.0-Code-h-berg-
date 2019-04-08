<?php

namespace App\Http\Controllers;
use App\Commande;
use App\Article;
use App\Commande_Article;
use ArrayObject;
use Illuminate\Http\Request;
use function Sodium\add;

class ComandeADMContreller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commes = Commande::all()->where('etat_commande', '=','SansAnomalie');
        $Arts = [];
        foreach ($commes as $comme) {
            $comme_arts = Commande_Article::all()->where('num_commande', '=', $comme->num_commande);
            $arts = array();
            foreach ($comme_arts as $art) {
                $article = Article::all()->where('numéro', '=', $art->numéro);

                array_push($arts,$article);
            }
            array_push($Arts,$comme->num_commande,$arts);



        }
        //var_dump($Arts[1]);
        return view('ComandeADM',compact('commes','Arts'));
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
        $comme = Commande::find($id);
        $comme->etat_commande = "Validé";
        $comme->save();
        return redirect('/dashbord/CommandeAD');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
