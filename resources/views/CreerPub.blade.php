@extends('app.Squelette')


@section('contenu')

    <div class="container-fluid" >
        <!-- Start Page Content -->
        <br>
        <div class="row" >
            <label class="label-input100"> Type de Publicité :</label>
            <div class="col-lg-2 et-tm-skill">
                <input type="radio" class=""  name="radio"  id="A1" value="A1" placeholder="Indiquer La Qantité Que vous vouler" checked> A1.
            </div>
            <div class="col-lg-2 et-tm-skill">
                <input type="radio" class="text-lg-left"  id="A2" name="radio"  value="A2" > <span class="text-thm">  A2. </span>
            </div>
            <div class="col-lg-2 et-tm-skill">
                <input type="radio" class=""  name="radio"  id="A3"  value="A3" placeholder="Indiquer La Qantité Que vous vouler" > A3.
            </div>
            <div class="col-lg-2 et-tm-skill">
                <input type="radio" class="text-lg-left"  id="A4" name="radio"  value="A4" placeholder="Indiquer La Qantité Que vous vouler"> <span class="text-thm">  A4. </span>
            </div>
            <div class="col-lg-2 et-tm-skill">
                <input type="radio" class="text-lg-left"  id="internet" name="radio"  value="internet" placeholder="Indiquer La Qantité Que vous vouler"> <span class="text-thm">  envoie par email . </span>
            </div>
        </div>




        <div class="row " style="margin-top: 8px;">
            <div class="col-lg-8 col-sm-8">
                <label for="" class="label-input100"> Titre :</label>
                <input type="text" id="titre" class="form-control input-rounded input100" placeholder="Entrez le titre ici">
            </div>

            <div class="col-lg-4 col-sm-4">
                <div style="float:right">
                    {!! Form::open(array('url' => '/dashbord/email' , 'class' => 'pull-right', 'id' => 'prévoire')) !!}
                    {{ Form::hidden('_method', 'GET') }}
                    <button type="button" class="btn btn-success btn-rounded m-b-10 m-l-5">Prévoir</button>
                    {{ Form::close() }}
                    <button type="button" id="publier" onclick="ajouterPub()" class="btn btn-info btn-rounded m-b-10 m-l-5">Enregistrer</button>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 col-sm-8">
                <label for="" class="label-input100"> Contenu :</label>
                <input type="text" id="contenu" class="form-control input-rounded input100" placeholder="Entrez le Contenu">
            </div>
            
        </div>


        <div class="content-box-large">
            <div class="panel-heading">
                <div class="panel-title"> Article </div>
            </div>
            <div class="panel-body">
                <table cellpadding="0" cellspacing="0" border="0" class="table table-hover table-bordered" id="example">
                    <thead>
                    <tr>
                        <th>Numero</th>
                        <th>Titre</th>
                        <th>Prix de vents</th>
                        <th>Categorie</th>
                        <th class="text-lg-left">Contenu</th>

                    </tr>
                    </thead>
                    <tbody>

                    <?php $i=0 ; ?>
                    @foreach($arts as $art)
                        <tr class="odd gradeX" onclick="SelectLigne(this);">
                            <td id ="<?php echo 'Num' . $i ;?>">{{$art->numéro}}</td>
                            <td id ="<?php echo 'titre' . $i; ?>"> {{$art->titre}}</td>
                            <td id ="<?php echo 'prix' . $i; ?>" >{{$art->Prixdevents}}</td>
                            <td id ="<?php echo 'prix' . $i; ?>" >{{$art->Categori}}</td>
                            <td class="center" >
                                <p id ="<?php echo 'contenu' . $i; ?>" class="col-lg-10 text-lg-left"> {{$art->Désignation}} </p>
                            </td>

                        </tr>
                        <?php $i++ ; ?>
                    @endforeach

                    </tbody>
                    
                </table>
            </div>
        </div>


        <!-- End PAge Content -->
    </div>
    <div id="myModalCv" class="modal dropdown animated zoomIn col-md-3 col-md-offset-4" style="top: 150px; margin-left: 37%;">

        <div class="modal-content ">

            <div class="container">
                <div class="from-groupe">

                    <img src ='https://fenouildeco.000webhostapp.com/public/images/validation.jpg' class='zoomIn rounded img-circle' style="right: 25%;">
                    <h5 class="text-lg-center text-thm et-tm-skill" >Pub Creér avec succés</h5>
                </div>


            </div>
        </div>
    </div>



@stop
@section('js')
<script>
    ObjSelec = [];

    var SelectLigne = function (obj) {
    var tr = obj.children;
    var int = tr[0].innerHTML;

    if(obj.className  == "selection")
    {
    obj.className  = "odd gradeX";
    var pos = ObjSelec.indexOf(int);
    var removedItem = ObjSelec.splice(pos, 1);
    console.log(ObjSelec);
    }
    else
    {
    obj.className  = "selection";
    ObjSelec.push(int);

    }


    };
    var ajouterPub = function () {

        var contenu =$('#contenu').val();
        var titre = $('#titre').val();
        var table = document.getElementsByName('radio') ;
        var valeur_choisie ;
        for (i=0; i<table.length; i++)
        {
            if ( table[i].checked )  { valeur_choisie = table[i].value ;  break; }
        }

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.post("{{route('CreatPub.store')}}",{User:ObjSelec,valeur_choisie:valeur_choisie,contenu:contenu,titre:titre}, function (data) {
            console.log(data);
             document.getElementById('myModalCv').style.display = 'block';
             setTimeout('Ajouter();', 4000);
        });


    };
    var Ajouter = function ()
    {


        document.getElementById('myModalCv').style.display = 'none';

    };
</script>
    <script src="https://fenouildeco.000webhostapp.com/public/js/jquery.dataTables.min.js"></script>

    <script src="https://fenouildeco.000webhostapp.com/public/js/dataTables.bootstrap.js"></script>

    <script src="https://fenouildeco.000webhostapp.com/public/js/custom.js"></script>
    <script src="https://fenouildeco.000webhostapp.com/public/js/tables.js"></script>

@stop