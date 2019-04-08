<?php

namespace App\Http\Controllers;

use App\Commande;
use Illuminate\Http\Request;
use App\Commande_Article;
use Illuminate\Routing\Route;
use App\Notefication;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ValiderCommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        if (isset(Auth::user()->id)) {
            $id = DB::select("select `num_commande` from `commande` where `etat_commande` = 'encour' and `id_indevidu` = ? ", [Auth::user()->id]);
            $Arts = [];
            if ($id != []) {
                $num_commande = $id[0]->num_commande;

                $LesArticle = DB::select('select * from `Article_commend` where `num_commande` = ?', [$num_commande]);
                /** @var TYPE_NAME $Arts */

                $i = 0;


                foreach ($LesArticle as $art) {

                    $Article = DB::select('select * from `Article` where `numéro` = ?', [$art->numéro]);
                    $Arts[$i] = (object)array("numro" => $art->numéro);
                    $Arts[$i]->qantite = $art->qantité;
                    $Arts[$i]->num_commande = $art->num_commande;
                    $Arts[$i]->titre = $Article[0]->titre;
                    $Arts[$i]->Désignation = $Article[0]->Désignation;
                    $Arts[$i]->Prixdevents = $Article[0]->Prixdevents;
                    $Arts[$i]->Categori = $Article[0]->Categori;
                    $Arts[$i]->imag = $Article[0]->imag;
                    $i++;
                }
            }
                return view('ValidéCommande', compact('Arts'));




        }else
        {
           return redirect('/');
        }
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
        
        $commande = Commande::find($id);
        $notification = new Notefication;

        $notification->objet = "Commande";
        $notification->Type = "attente";
        $notification->état = 0;
        $notification->id_indevidu  = Auth::user()->id ;

        $contenu = $request->all();

        if(isset($contenu['Cart'])) {
            $commande->etat_commande = "enattente";
            $commande->NumeroCart = $contenu['Cart']['numero'];
            $commande->DateValidite = $contenu['Cart']['dateval'];
            $commande->Prix = $contenu['Cart']['total'];
            $commande->CVV = $contenu['Cart']['cvv'];


            $notification->contenu = "verification de vos cordonné banquere";


            try
            {
                $notification->save();
                $commande->save();
            }catch (\Exception $exception)
            {
                return $exception ;
            }
        }
        if(isset($contenu['Cheque']))
        {
            $commande->Prix = $contenu['Cheque']['total'];
            $commande->etat_commande = "enattente";
            $commande->etat_Chéque = "enattente";
            $notification->objet = "Commande";
            $notification->contenu = "attente et verification de la validité de votre chéque";

            try
            {
                $notification->save();
                $commande->save();
            }catch (\Exception $exception)
            {
                return $exception ;
            }



        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)

    {
        $chars = preg_split('/ /', $id, -1, PREG_SPLIT_OFFSET_CAPTURE);
        DB::delete('DELETE FROM `Article_commend` WHERE `Article_commend`.`numéro` = ? AND `Article_commend`.`num_commande` = ?',[$chars[0][0],$chars[1][0]]);

    }
}
