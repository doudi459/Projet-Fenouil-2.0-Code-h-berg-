<?php

namespace App\Http\Controllers;
use App\Article;
use App\Commande;
use App\Commande_Article;
use function GuzzleHttp\Promise\all;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Integer;

class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */

    public function index()
    {

        return "OK";

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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $commande = $request->all();



        try {

            $commandetab = DB::select("select * from `commande` where `etat_commande` = 'encour' and `id_indevidu` = ? ", [$commande['indevidu']]);

        }
        catch (\Exception $exception)
        {
            return $exception ;
        }


        if($commandetab == [])
        {

            $commandetab1 = new Commande;

            $commandetab1->etat_commande = 'encour';

            $commandetab1->id_indevidu =  intval($commande['indevidu']);
            try {
                $commandetab1->save();
            }
            catch (\Exception $exception)
            {
                return $exception;
            }
            $id = $commandetab1->num_commande;

        }
        else{


                $id=$commandetab[0]->num_commande;



        }

        $art_com = DB::select('select * from `Article_commend` where `num_commande` = ? and `numéro` = ?', [intval($id),intval($commande['numero'])]);
        if($art_com == []) {
            $commande_art_tab = new Commande_Article;

            $commande_art_tab->numéro = intval($commande['numero']);

            $commande_art_tab->qantité = intval($commande['qantit']);

            $commande_art_tab->num_commande = intval($id);


            try {
                $commande_art_tab->save();
            }
            catch (\Exception $exception)
            {
                return $exception;
            }
        }
        else
        {

            $newqntiti = intval($art_com[0]->qantité)+ intval($commande['qantit']);
            var_dump($newqntiti);
            try {
                DB::update('UPDATE `Article_commend` SET `qantité` = ? WHERE `numéro` = ? AND `num_commande` = ? ', [intval($newqntiti), intval($commande['numero']), intval($commande['qantit'])]);
            }
            catch (\Exception $exception)
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

        $art = Article::all()->find($id);

        return view('commande',compact('art'));

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
