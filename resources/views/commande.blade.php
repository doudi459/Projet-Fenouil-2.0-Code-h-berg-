@extends('app.indexsquelette')





@section('contenu')
    <section class="et-team-one et-innertm">
        <div class="container-fluid">
            <div class="row second-rawn">
                <div class="col-xs-12 col-sm-12 col-md-5 extraspac">
                    <div class="et-team-col et-innerteam">
                        <img class="img-responsive img-fluid" src="https://fenouildeco.000webhostapp.com/public/images/{{$art->imag}}" style="height: 400px;" alt="">
                        <div class="et-teatmembr-contact">Commander</div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7 ">
                    <div class="row">
                        <div class="col-md-12 ">
                            <em class="text-capitalize">Article de {{$art->Categori}}</em>
                            <h2 class="text-thm">{{$art->titre}} </h2>
                            <p class="et-tmp-detls"> <?php echo $art->Désignation ;?> </p>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-7 et-tm-skill">Appreciation <span class="text-thm">Prix : {{$art->Prixdevents}} €</span></div>
                        <div class="col-md-6">
                            <!--Progress Levels-->
                            <div class="progress-levels et-one">
                                <div class="progress-box wow" data-wow-delay="100ms" data-wow-duration="1500ms">
                                    <div class="box-title">Qualité Du Produit</div>
                                    <div class="inner">
                                        <div class="bar">
                                            <div class="bar-innner"><div class="bar-fill" data-percent="90"><div class="percent"></div></div></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-box wow" data-wow-delay="200ms" data-wow-duration="1500ms">
                                    <div class="box-title">Prix Du Produit</div>
                                    <div class="inner">
                                        <div class="bar">
                                            <div class="bar-innner"><div class="bar-fill" data-percent="70"><div class="percent"></div></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <div class="label-input100">
                            Quantité
                        </div>
                        <input type="number" id="qantite" class="input100  border-right-0 border-left-0 border-danger" value="1" min="1" max="5" placeholder="Indiquer La Qantité Que vous vouler" />

                    </div>


                    <button type="button" id="botton" class="rounded btn-lg btn-primary" onclick="Edite();" style="margin-top: 90px; height: 50px; width: 25%; margin-left: 23%;" data-token="{{ csrf_token() }}" > Commander </button>
                    <form id="Redirect" action="{{ route('login') }}"  style="display: none;">
                        @csrf
                    </form>
                </div>

                <div class="col-md-4">
                    <!-- separator: Google Map -->
                    <p class="label-input100">Nos Magasins :</p>
                    <div id="map-canvas" class="et-map" style="height: 320px;">

                    </div>
                </div>
            </div>
        </div>


    </section>

    <div id="myModal3" class="modal dropdown animated zoomIn col-md-3 col-md-offset-4" style="top: 150px;">

        <div class="modal-content ">

            <div class="container">



                <div class="from-groupe">

                    <img src ='https://fenouildeco.000webhostapp.com/public/images/erreur.png' class='zoomIn rounded img-circle' style="right: 25%;">
                    <h5 class="text-lg-center text-thm et-tm-skill" >Vous Devez posseder un compte pour pouvoir Passer une commande </h5>
                    <h2 class="text-lg-center"> Vous allez être redirigés vers la page de connexion</h2>
                </div>



            </div>
        </div>
    </div>

    <div id="myModal1" class="modal dropdown animated zoomIn col-md-3 col-md-offset-4" style="top: 150px;">

        <div class="modal-content ">

            <div class="container">



                <div class="from-groupe">

                    <img src ='https://fenouildeco.000webhostapp.com/public/images/validation.jpg' class='zoomIn rounded img-circle' style="right: 25%;">
                    <h5 class="text-lg-center text-thm et-tm-skill" >votre commande a été ajoutée au panier avec succès. </h5>
                    <h2 class="text-lg-center">Vous devez confirmer votre commande . </h2>
                </div>



            </div>
        </div>
    </div>



                    @stop

@section('js')

     <script src="https://maps.google.com/maps/api/js?key=AIzaSyABqK-5ngi3F1hrEsk7-mCcBPsjHM5_Gj0"></script>
    <script src="https://fenouildeco.000webhostapp.com/public/js/jquery.googlemap.js"></script>
   
    <script type="text/javascript">
        $(window).on('load',function() {
            $("#map-canvas").googleMap({
                zoom:15, // Initial zoom level (optional)
                coords: [48.6255811 ,2.4398007], // Map center (optional)
                type: "ROADMAP", // Map type (optional)
                address: "IBGBI université d'evry, Paris, France", // Postale Address
                infoWindow: {
                    content: '<p style="text-align:center;"><strong>Evry val d\'essone,</strong><br> Paris, France</p>'
                }
            });
            // Marker 2
            $("#map-canvas").addMarker({
                coords: [48.6255811 ,2.4398007]
            });
        });
    </script>
    <script type="text/javascript">
        var Edite  = function ()
        {



                    @if (Route::has('login'))

                    @auth


            var qantit = document.getElementById('qantite').value;
            var numero = "{{$art->numéro}}";
            var indevidu = "{{Auth::user()->id}}";





            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.post("{{route('Commande.store')}}",{indevidu:indevidu,numero:numero,qantit:qantit},function (data) {
                console.log(data);
            });

            document.getElementById('myModal1').style.display = 'block';

            setTimeout('ajouterCommande();', 5000);

                    @else
            var modal = document.getElementById('myModal3');
                modal.style.display = 'block';

            setTimeout('document.getElementById(\'Redirect\').submit();', 5000);

                     @endauth

                        @endif
        };

        var ajouterCommande = function ()
        {

            document.getElementById('myModal1').style.display = 'none';

        };



    </script>

@stop
