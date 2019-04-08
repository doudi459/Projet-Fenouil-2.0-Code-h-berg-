@extends('app.Squelette')



@section('contenu')


    <div class="contener">

        <div class="card">
            <div class="card-body">
            <div class="row">
                <div class="form-group" style="margin-left: 3%;">
                    <label class="label-input100">Moyenne d'Age</label>
                    <input class="input100" id="age" type="number" placeholder="Moyenne d'Age">
                </div>
                <div class="form-group" style="width: 40%;">
                    <label class="label-input100 ">Categorie socio-Proféssionelle
                    </label>
                    <select id="categori"   class="input100 {{ $errors->has('categori') ? ' is-invalid' : '' }}" name="categori"  >
                        <option ></option>
                        <option  value=" Agriculteurs exploitants ">
                            Agriculteurs exploitants
                        </option>
                        <option value="Artisans, commerçants et chefs d’entreprise ">
                            Artisans, commerçants et chefs d’entreprise
                        </option>
                        <option  value="Cadres et professions intellectuelles supérieures">
                            Cadres et professions intellectuelles supérieures
                        </option>
                        <option value="Professions Intermédiaires ">
                            Professions Intermédiaires
                        </option>
                        <option  value="Employés">
                            Employés
                        </option>
                        <option value="Ouvriers">
                            Ouvriers
                        </option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="label-input100">Adress</label>
                    <input class="input100" id="adress"  type="text" placeholder="votre adress">
                </div>
                <button type="button" class="btn col-lg-2 btn-primary btn-lg" aria-controls="example" onclick="appuier();" style="margin-left: 80%;">Appliqué le Filtre </button>
            </div>


            <div class="row">
                <div class="content-box-large">
                    <div class="panel-heading">
                        <div class="panel-title">Tous Les Individus</div>
                    </div>
                    <div class="panel-body">
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-hover table-bordered" id="example">
                            <thead>
                            <tr>
                                <th>Numero</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Age</th>
                                <th>Email</th>
                                <th>Adress</th>
                                <th>Categori</th>
                                <th>NumTell</th>
                                <th class="text-lg-left">DateNes</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php $i=0 ; ?>
                            @foreach($arts as $art)
                                <tr class="odd gradeX" onclick="SelectLigne(this);">
                                    <td id ="<?php echo 'Num' . $i ;?>">{{$art->id}}</td>
                                    <td id ="<?php echo 'Nom' . $i ;?>">{{$art->name}}</td>
                                    <td id ="<?php echo 'Prenom' . $i; ?>"> {{$art->prenom}}</td>
                                    <td id ="<?php echo 'Age' . $i; ?>" >{{$art->Age }}</td>
                                    <td id ="<?php echo 'Email' . $i; ?>" >{{$art->Email}}</td>
                                    <td id ="<?php echo 'Adress' . $i; ?>" >{{$art->Adress}}</td>
                                    <td id ="<?php echo 'Categori' . $i; ?>" >{{$art->categori_socio}}</td>
                                    <td id ="<?php echo 'NumTell' . $i; ?>" >{{$art->NumTell}}</td>
                                    <td id ="<?php echo 'DateNes' . $i; ?>" >{{$art->DateNes}}</td>


                                </tr>
                                <?php $i++ ; ?>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
                <div class="card-footer">
                    <input type="button" value="Validé Cible" onclick="ajouterCible();" class="font-weight-bold btn btn-circle btn-block" style="background-color:rgba(28, 189, 233, 0.95);"/>
                </div>
            </div>

            </div>

        </div>
    <form id="Redirect" action="{{ route('ToutLesCible.index') }}"  style="display: none;">
        @csrf
    </form>


    <div id="myModalCv" class="modal dropdown animated zoomIn col-md-4 " style="top: 100px; margin-left: 37%;">

        <div class="modal-content">

            <div class="container">
                <div class="from-groupe">

                    <img src ="https://fenouildeco.000webhostapp.com/public/images/validation.jpg" class="zoomIn rounded img-circle" style="width: 50%;">
                    <br>
                    <h5 class="text-lg-center text-thm et-tm-skill" style="margin-right: 50%" >Cible Ajouter avec Succeé</h5>
                    <h2 class="text-lg-center" style="margin-right: 50%" >redirection</h2>

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
        var appuier = function () {
            var lab = $('#example_filter').children('label');
            lab.css('display' , 'none' );
            var imp = lab.children('input');
            var cat = $('#categori').val();
            var age  = $('#age').val();
            var adres = $('#adress').val();
            var requette = cat + ' ' + age + ' ' + adres;
            imp.val(requette) ;
            imp.trigger("keyup");




        };

        window.onload = function () {
            $('#example_filter').css('display', 'none');
            $('#example_length').css('width', '150px');

        };

    </script>
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
        var ajouterCible = function () {

            var age =$('#age').val();
            var categori = $('#categori').val();
            var adress = $('#adress').val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.post("{{route('NewCible.store')}}",{User:ObjSelec,age:age,categori:categori,adress:adress}, function (data) {

                document.getElementById('myModalCv').style.display = 'block';
                setTimeout('Ajouter();', 4000);
            });


        };
        var Ajouter = function ()
        {


            document.getElementById('Redirect').submit();

        };

    </script>


@stop


