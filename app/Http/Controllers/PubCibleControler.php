<?php

namespace App\Http\Controllers;
use App\article_pub;
use App\Publicite;
use App\Cible_routage;
use App\Article;
use App\cible_pub;
use App\User;
use App\individu_cible;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;

class PubCibleControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cibles = Cible_routage::all()->where('etat','=','Accepté');
        $pubs = Publicite::all();
        return view('pubCible',compact('pubs','cibles'));
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
    public function CreatXMLFile(Request $request)
{
    try {
        $elment = $request->all();
        $publicite = Publicite::all()->find(intval($elment["num_pub"]));

        $articles = Article::all();
        $individus = [];
        foreach ($request["num_cibles"] as $num_cible) {
            $individ = \App\Cible_routage::all()->where('num_cible', "=", $num_cible);
            array_push($individus, $individ);
        }


        $xml = new \XMLWriter();


        $xml->openMemory();
        $xml->startDocument();
        $xml->writePi("xml-stylesheet", "type=\"text/xsl\" href=\"test2.xsl\"");
        $xml->startElement('Publicites');

        $articles_pub = article_pub::all()->where('num_pub', '=', $elment["num_pub"]);




            $xml->startElement('Publicite');
            $xml->writeElement('id',$publicite->num_pub);
            $xml->writeElement('type', $publicite->type_papier);
            $xml->writeElement('nom',$publicite->titre);
            $xml->writeElement('description',$publicite->description);
            foreach ($individus as $individue) {
                foreach ($individue as $item) {



                    $xml->startElement('Individu');
                    if ($item->socio_pro != null)
                    {
                        $xml->writeElement('categorie', $item->socio_pro);
                    }else
                    {
                        $xml->writeElement('categorie', "NUll");
                    }
                    if ($item->age != null)
                    {
                        $xml->writeElement('Age', $item->age);
                    }else
                    {
                        $xml->writeElement('Age', "NUll");
                    }
                    if ($item->adress != null)
                    {
                        $xml->writeElement('Adresse', $item->adress);
                    }else
                    {
                        $xml->writeElement('Adresse', "NUll");
                    }
                    $xml->endElement();
                }

            }
            foreach ($articles as $article) {

                foreach ($articles_pub as $article_pub) {
                    $num_pub = $article_pub->num_pub;
                    $num_art = $article_pub->numéro;

                    if ($num_art == $article->numéro && $publicite->num_pub == $num_pub) {
                        $xml->startElement('Article');
                        $xml->writeElement('id', $article->numéro);
                        $xml->writeElement('titre', $article->titre);
                        $xml->writeElement('description', $article->Désignation  );
                        $xml->writeElement('Prix_de_vente', $article->Prixdevents);
                        $xml->endElement();

                    }
                }

            }
            $xml->endElement();
            $xml->endDocument();
            $content = $xml->outputMemory();
            $xml = null;


            //  $path = '/toto.xml';
            //file_put_contents($path, $content);
            // return response::download($path);
            Storage::put('public/test2.xml', $content);
            $path =Storage::get('public/test2.xml');

            //  includeFile('/Sans_titre1.css');
            response($content)->header('Content-Type', 'text/html');
            $data = [];
        Mail::send('email.xmlfile', $data ,function ($message) use($path)
        {

            $message->to("dhialayadi@gmail.com",'Fenouil')->subject('Publiciter Xml');
            $message->from('Fenouil@anomali.com', 'Fenouil');
            $message->attach(storage_path('app/public/test2.xml'));
            $message->attach(storage_path('/app/public/test2.xsl'));

        });
            //return response($content)->header('Content-Type', 'text/html');
            // return response($content)->header('xml-stylesheet',file("Sans_titre1.css"));


    }catch (\Exception $exception)
    {
        return $exception ;
    }

}






    public function store(Request $request)
    {
        
        try{

            $cible_pub_view = $request->all();


            $emails = [];

            foreach ($cible_pub_view["num_cibles"] as $num_cible) {
            $newpubcible = new cible_pub;
            $newpubcible->num_pub = $cible_pub_view["num_pub"];

                $individus = individu_cible::all()->where('id_cible', '=', intval($num_cible));
                    foreach ($individus as $individu) {
                        try {

                            $Emailead = User::all()->find($individu->id_indevidu);

                            array_push($emails,$Emailead->Email);
                        } catch (\Exception $exception) {
                            return "Pub deja envoyer a La Cible Selectionner.";
                        }
                    }

                try {

                $newpubcible->num_cible = intval($num_cible);


                    $newpubcible->save();
                } catch (\Exception $exception) {
                    return $exception;
                }


            }

                $element = Publicite::all()->find($cible_pub_view["num_pub"]);
                $art_pub = article_pub::all()->where('num_pub','=', $cible_pub_view["num_pub"]);
                $Articles = [];
                foreach ($art_pub as $pub)
                {
                    $Article = Article::all()->find($pub->numéro);
                    array_push($Articles,$Article);
                }


                $data = [

                    "object" => "Venez Découvrire nos Articles  ",
                    "titre" => $element['titre'],
                    "Contenu" => $element["description"],
                    "Articles" => $Articles
                ];

            

                Mail::send('email.pubmail',$data , function ($message) use($data,$emails)
                {

                        $message->to($emails,'Fenouil')->subject($data['object']);
                        $message->from('Fenouil@anomali.com', 'Fenouil');

                });
                
        }catch (\Exception $exception) {
                    return $exception;
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
