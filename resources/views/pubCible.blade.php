@extends('app.Squelette')




@section('contenu')

<div class="container-fluid">


    <div class="row">
        <div class="card col-lg-12 col-md-12" >
            <div class="row" >
                <div class="col-lg-3 col-lg-offset-3 et-tm-skill text-thm" >
                    <input type="radio" class=""  name="radio"  id="mark" value="email" placeholder="Indiquer La Qantité Que vous vouler" > Envoyer par email.
                </div>
                <div class="col-lg-6 et-tm-skill text-thm" >
                    <input type="radio" class=""  name="radio"  id="eml" value="impression" placeholder="Indiquer La Qantité Que vous vouler" checked> Envoyer pour impression.
                </div>
            </div>
            <div class="row">
        <div class="card col-lg-6 col-md-5" >

        <table cellpadding="0" cellspacing="0" border="0" class="table table-hover table-bordered " id="example" >
            <thead>
            <tr>
                <th>Numéro Publicité</th>
                <th>Type</th>
                <th>Titre</th>
                <th>Description</th>



            </tr>
            </thead>
            <tbody id = "tab">
            @foreach($pubs as $pub )
                <tr onclick="SelectLignePub(this)">
                <td>{{$pub->num_pub}}</td>
                <td>{{$pub->type_papier}}</td>
                <td>{{$pub->titre}}</td>
                <td>{{$pub->description}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        </div>
        <div class="card col-lg-5 col-md-5" >
        <table cellpadding="0" cellspacing="0" border="0" class="table table-hover table-bordered " id="example1" >
            <thead>
            <tr>
                <th>Numéro Cibles</th>
                <th>Age</th>
                <th>Categorie</th>
                <th>adresse</th>



            </tr>
            </thead>
            <tbody id = "tab">
            @foreach($cibles as $cible )
                <tr onclick="SelectLigne(this);">
                    <td> {{$cible->num_cible}} </td>
                    <td>@if($cible->age == null) Null @else {{$cible->age}} @endif</td>
                    <td>@if($cible->socio_pro == null) Null @else {{$cible->socio_pro}} @endif</td>
                    <td>@if($cible->adress == null) Null @else {{$cible->adress}} @endif</td>
                </tr>
            @endforeach


            </tbody>
        </table>
        </div>
        </div>
            <div class="card-footer">
                <button type="button" id="publier" onclick="envoyerPub()" class="btn btn-info btn-rounded m-b-10 m-l-5">Publier</button>
            </div>
        </div>

    </div>

</div>



@stop
@section('js')
    <script src="https://fenouildeco.000webhostapp.com/public/js/jquery.dataTables.min.js"></script>

    <script src="https://fenouildeco.000webhostapp.com/public/js/dataTables.bootstrap.js"></script>

    <script src="https://fenouildeco.000webhostapp.com/public/js/custom.js"></script>
    <script src="https://fenouildeco.000webhostapp.com/public/js/tables.js"></script>
    <script>
        $(document).ready(function() {
            $('#example1').dataTable();
        } );
    </script>
    <script>
        ObjSelec = [];
        ObjSelecpubval = null;
        ObjSelecpub = null ;


        var SelectLigne = function (obj) {
            var tr = obj.children;
            var int = tr[0].innerHTML;

            if(obj.className  == "selection")
            {
                obj.className  = "odd gradeX";
                var pos = ObjSelec.indexOf(int);
                var removedItem = ObjSelec.splice(pos, 1);

            }
            else
            {
                obj.className  = "selection";
                ObjSelec.push(int);

            }


        };
        function SelectLignePub(obj) {


            var tr = obj.children;

            obj.className = "selection";

            if (ObjSelecpub != null) {

                ObjSelecpub.className = "odd gradeX";
                ObjSelecpub = obj ;
                ObjSelecpubval = tr[0].innerHTML; // Selectionner un ligne et charger

            } else {

                ObjSelecpub = obj ;
                ObjSelecpubval = tr[0].innerHTML;
            }
        }
        function envoyerPub() {
            if(ObjSelec !== [] && ObjSelecpub != null )
            {
                var table = document.getElementsByName('radio') ;
                var valeur_choisie ;
                for (i=0; i<table.length; i++)
                {
                    if ( table[i].checked )  { valeur_choisie = table[i].value ;  break; }
                }
                alert(ObjSelec);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                if (valeur_choisie == "email") {
                    $.post("{{route('EnvoyerPub.store')}}", {
                        num_pub: ObjSelecpubval,
                        num_cibles: ObjSelec,
                    }, function (data) {

                        alert(data);
                    });
                }
                else {
                    $.post("{{route('EnvoyerPub.CreatXMLFile')}}", {
                        num_pub: ObjSelecpubval,
                        num_cibles: ObjSelec,
                    }, function (data) {

                        console.log(data);
                    });

                }
            }

        }
    </script>


    @stop
