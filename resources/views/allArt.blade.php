@extends('app.Squelette')




@section('contenu')


    <div class="content-box-large">
        <div class="panel-heading">
            <div class="panel-title">Tous les Articles</div>
        </div>
        <div class="panel-body">
            <table cellpadding="0" cellspacing="0" border="0" class="table table-hover table-bordered" id="example">
                <thead>
                <tr>
                    <th>Numero</th>
                    <th>Titre</th>
                    <th>Prix de vente</th>
                    <th>Categorie</th>
                    <th class="text-lg-left">Contenu</th>

                </tr>
                </thead>
                <tbody>

                <?php $i=0 ; ?>
          @foreach($arts as $art)
                <tr class="odd gradeX">
                    <td id ="<?php echo 'Num' . $i ;?>">{{$art->numéro}}</td>
                    <td id ="<?php echo 'titre' . $i; ?>"> {{$art->titre}}</td>
                    <td id ="<?php echo 'prix' . $i; ?>" >{{$art->Prixdevents}}</td>
                    <td id ="<?php echo 'prix' . $i; ?>" >{{$art->Categori}}</td>
                    <td class="center" >
                        <div class="row">

                        <p id ="<?php echo 'contenu' . $i; ?>" class="col-lg-10 text-lg-left"> {{$art->Désignation}} </p>

                        <div class="btn-group btn-group-xs col-lg-2" role="group" >
                            <button type="button"  id = "{{$i}}" class="btn btn-link btn-sm" style="padding-right: 3px;" onclick="preview(this);">Voir</button>
                            <span class="vl"></span>
                            {!! Form::open(array('url' => 'allArt/' . $art->numéro , 'class' => 'pull-right')) !!}
                            {{ Form::hidden('_method', 'DELETE') }}
                            <button  type="submit" class="btn btn-link btn-sm" style="padding: 3px; color: red" >Supprimer </button>
                            {{ Form::close() }}
                            <span class="vl"></span>
                            <button type="button" id = "{{$art->numéro}}" onclick="Edite(this);" class="btn btn-link btn-sm" style="padding-left: 3px;">Editer</button>

                        </div>
                        </div>
                    </td>

                </tr>
                <?php $i++ ; ?>
          @endforeach

                </tbody>
            </table>
        </div>
    </div>



    <div id="myModal" class="modal dropdown animated zoomIn col-md-3 col-md-offset-5" style="top: 200px;">

        <div class="modal-content ">
                <section class="et-services-one">
                    <div class="container">
                        <div class="row">


                            <div class="col-xs-12 col-sm-6 col-md-4 " style="margin-left:53px;">
                                <div class="et-service-column style2">
                                    <div class="et-service-thumb">
                                        <img  id ="imgartview" class="img-responsive img-fluid" style="height: 300px; width: 100%;" src="images/resource/service2.jpg" alt="">
                                        <span class="et-service-thumb2"><img src="images/icons/bath-tub.jpg" alt=""></span>
                                        <div class="et-service-overlay">
                                            <div class="et-srvc-ovrly-icon">
                                                <img src="images/icons/bath-tub2.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="et-service-contnt">

                                        <div  class="row">
                                            <h3  class="col-lg-6" id="titleartview"></h3>
                                            <h3  class="col-lg-6" id="priceartview"></h3>
                                         </div>



                                        <p style="float: none" class="align-bottom;" id ="contenuartview"> </p>
                                        <a class="text-thm" href="#">lire plus <i class="lnr lnr-arrow-right" aria-hidden="true"></i></a>
                                        <div class="et-slash">//////////////////////////////////////////////////////</div>
                                    </div>

                                </div>
                            </div>



                        </div>
                    </div>
                </section>

            <div style="float: right;" >
                <button type="button" id="bntAdd2" class="btn btn-info btn-flat btn-addon m-b-10 m-l-5" ><i class="fa fa-check"></i>Cacher</button>
            </div>


        </div>
    </div>
    <div id="myModal2" class="modal dropdown animated zoomIn col-md-7 col-md-offset-3" style="top: 200px;">

        <div class="modal-content ">

            <div class="container">
                <div class="card card-register mx-auto mt-5">
                    <div class="card-header">enregistrer un compte </div>
                    <div class="card-body">
                        {!! Form::open(['id' => 'form']) !!}
                        {{ Form::hidden('_method', 'PUT') }}
                        <div class="from-group">
                            <div class="form-label-group">
                                <input type="text" id="Numero" class="form-control"  required="required" autofocus="autofocus">
                                <label for="firstName">Numero</label>
                            </div>
                        </div>
                        <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-label-group">
                                            <input type="text" id="Titre" class="form-control" placeholder="Titre" required="required" autofocus="autofocus">
                                            <label for="firstName">Titre</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-label-group">
                                            <input type="number" id="Prix" class="form-control" placeholder="Prix de vent" required="required">
                                            <label for="Prix de vent">Prix de vente</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-label-group">

                                    {!! Form::label('tite','Contenu:') !!}
                                    {!! Form::textarea('comment',null,['class' => ' form-control rounded border border-primary' ,'id' => 'tinymce_basic', 'row' => '15', 'style' => 'height: 200px;' ]) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-label-group">
                                    <input type="file" id="lastName" class="btn btn-default" placeholder="Last name" required="required">
                                </div>
                            </div>
                            <div class="row">
                                <button type="submit" class="btn btn-md btn-primary col-lg-6"  id="btnEdit" href="#">Modifier</button>
                                <button type="button" class="btn btn-md btn-danger col-lg-6 "  id="btnEdit1" href="#">Abandonner</button>

                            </div>

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>



        </div>
    </div>



@stop
@section('js')

    <script src="js/jquery.dataTables.min.js"></script>

    <script src="js/dataTables.bootstrap.js"></script>

    <script src="js/custom.js"></script>
    <script src="js/tables.js"></script>

    <script type="text/javascript">


        function choisireArticle(obj)
        {




            obj.onmouseover = function(){
                modal.style.display ='block';
            }
            obj.onmouseenter = function () {
                modal.style.display ='block';
            }
            obj.onmousemove = function (){
                modal.style.display ='block';
            }
            obj.onmousedown = function () {
                modal.style.display ='block';
            }






        }
        function live (obj) {
            var modal = document.getElementById('myModal');
            obj.onmouseleave = function(){
                modal.style.display = "none";
            }

        }



    </script>

    <script type="text/javascript">
        var preview  = function (obj) {

            var title = 'titre' + obj.id;
            var contenu = 'contenu' + obj.id;
            var Num = 'Num' + obj.id;
            var ElementNum = document.getElementById(Num).innerHTML;
            var ElementTitre = document.getElementById(title).innerHTML;

            var ElementContenu= document.getElementById(contenu).innerHTML;


            var petitvutitre = document.getElementById('titleartview');
            var petitvuprix = document.getElementById('priceartview');
            var petitvucontenu = document.getElementById('contenuartview');

            var petitvuimg = document.getElementById('imgartview');

            petitvutitre.innerHTML = ElementTitre;
            petitvucontenu.innerHTML = ElementContenu;
            $.get("allArt/1/edit",{id:"1",numero:ElementNum},function(data){

                petitvuimg.src = "images/" + data;
            });


            var modal = document.getElementById('myModal');
            var btn2  = document.getElementById('bntAdd2');
            obj.onclick = function(){
                modal.style.display ='block';
            };
             btn2.onclick = function(){
                modal.style.display ='none';
            };

            window.onclick =function(){
                if(obj.target == modal){
                    modal.style.display = "none";
                }
            }


        };

        var Edite  = function (obj)
        {

            var modal = document.getElementById('myModal2');
            var btn2  = document.getElementById('btnEdit');
            var btn1  = document.getElementById('btnEdit1');

            obj.onclick = function(){
                modal.style.display ='block';
            };
            btn2.onclick = function(){
                modal.style.display ='none';
                form = document.getElementById('form')
                form.url = 'allArt/' + btn2.id;
            };
            btn1.onclick = function (){
                modal.style.display ='none';
            }

            window.onclick =function(){
                if(obj.target == modal){
                    modal.style.display = "none";
                }
            }

        };









    </script>
    <script src="https://fenouildeco.000webhostapp.com/public/js/bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.js"></script>
    <script src="https://fenouildeco.000webhostapp.com/public/js/bootstrap-wysihtml5/src/bootstrap-wysihtml5.js"></script>

    <script src="https://fenouildeco.000webhostapp.com/public/js/ckeditor/ckeditor.js"></script>
    <script src="https://fenouildeco.000webhostapp.com/public/js/ckeditor/adapters/jquery.js"></script>

    <script type="text/javascript" src="https://fenouildeco.000webhostapp.com/public/js/tinymce/tinymce.min.js"></script>
    <script src="https://fenouildeco.000webhostapp.com/public/js/editors.js"></script>
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>



@stop
