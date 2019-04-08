@extends('app.Squelette')




@section('contenu')


    <div class="content-box-large">
        <div class="panel-heading">
            <div class="panel-title">Bootstrap dataTables</div>
        </div>
        <div class="panel-body">
            <table cellpadding="0" cellspacing="0" border="0" class="table table-hover table-bordered" id="example">
                <thead>
                <tr>
                    <th>Numero</th>
                    <th>Prix</th>
                    <th>Option</th>

                </tr>
                </thead>
                <tbody>

                <?php $i=0 ; ?>
                @foreach($commes as $art)
                    <tr class="odd gradeX">
                        <td id ="<?php echo 'Num' . $i ;?>">{{$art->num_commande}}</td>
                        <td id ="<?php echo 'titre' . $i; ?>"> {{$art->Prix}}</td>
                        <td class="center" >
                            <div class="row">

                                <div class="btn-group btn-group-xs col-lg-2 col-lg-offset-9" role="group" >
                                    <button type="button"  data-id = "{{$art->num_commande}}" class="btn  btn-link btn-sm" style="padding-right: 3px; color: #20c997"  onclick="preview(this);">Voir les articles</button>
                                    <span class="vl"></span>
                                    <span class="vl"></span>
                                    {!! Form::open(array('url' => '/dashbord/anomalie/' . $art->num_commande , 'class' => 'pull-right')) !!}
                                    {{ Form::hidden('_method', 'GET') }}

                                    {{ Form::close() }}
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
    @for($i = 0 ; $i < sizeof($Arts) / 2 ; $i++ )
    <div id="{{$Arts[2*$i]}}" class="modal dropdown animated zoomIn col-md-6 " style="top: 200px; margin-left: 30%;">
        <div class="modal-content animated zoomIn " >

    <div class="container-fluid" >
                <div class="row">


                    <div class="card">
                        <div class="card-body">
            <span class="text-thm et-tm-skill">
            Valider Votre commande
            </span>
                            <div class="progress-levels et-one">
                                <div class="progress-box wow" data-wow-delay="100ms" data-wow-duration="1500ms">

                                    <div class="inner">
                                        <div class="bar">
                                            <div class="bar-innner"><div class="bar-fill" data-percent="100"><div class="percent"></div></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if(isset($Arts))
                                <?php $valeur = 0 ; ?>
                                @foreach($Arts[2 * $i + 1] as $arts )
                                    @foreach($arts as $art)

                                    <div class="row" >
                                        <div class="col-lg-4">
                                            <img class="img-responsive" style="height: 100px;width: 100%;" src="https://fenouildeco.000webhostapp.com/public/images/{{$art->imag}}" alt="">
                                        </div>
                                        <div class="col-lg-8" >
                                            <div class="row">
                                                <h3 class="col-lg-4 text-thm">Titre : {{$art->titre}} </h3>
                                                <h3 class="col-lg-4 text-thm"> Prix : {{$art->Prixdevents}}</h3>

                                            </div>
                                            <br>
                                            <div class="et-slash">////////////////////////////////////////////////////////////////////////////</div>
                                        </div>
                                    </div>
                                @endforeach
                                @endforeach
                            @endif

                        </div>


                        <div class="card-footer">

                                <div>

                                    {!! Form::open(array('url' => '/dashbord/CommandeAD/' . $Arts[2*$i] , 'class' => 'pull-right')) !!}
                                    {{ Form::hidden('_method', 'GET') }}
                                    <button class="btn btn-primary btn-md btn-block"  style="height: 40px;">Valider commande</button>
                                    {{ Form::close() }}

                                </div>
                        </div>

                    </div>

                </div>
    </div>

            </div>


    </div>
    @endfor

@stop

@section('js')

    <script !src="">
       var  preview = function (obj) {

        var id = obj.dataset.id;
        var model = document.getElementById(id) ;
           model.style.display = "block";


          model.onclick = function () {
              model.style.display = "none";
          }

       };



    </script>
@stop