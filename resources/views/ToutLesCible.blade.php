@extends('app.Squelette')



@section('contenu')



    <div class="content-box-large">
        <div class="panel-heading">
            <div class="panel-title">Tout Les Cibles</div>
        </div>
        <div class="panel-body">
            <table cellpadding="0" cellspacing="0" border="0" class="table table-hover table-bordered" id="example">
                <thead>
                <tr>
                    <th>Numero</th>
                    <th>age</th>
                    <th>adress</th>
                    <th>socio_pro</th>
                    <th>état de la Cible</th>
                    <th class="text-lg-left">Action</th>

                </tr>
                </thead>
                <tbody>

                <?php $i=0 ; ?>
                @foreach($arts as $art)
                    <tr class="odd gradeX">
                        <td id ="<?php echo 'Num' . $i ;?>">{{$art->num_cible}}</td>
                        <td id ="<?php echo 'ag' . $i; ?>">@if($art->age == null) Null @else {{$art->age}}  @endif </td>
                        <td id ="<?php echo 'sc' . $i; ?>" >@if($art->socio_pro == null) Null @else {{$art->socio_pro}} @endif </td>
                        <td id ="<?php echo 'ad' . $i; ?>" >@if($art->adress == null) Null @else {{$art->adress}} @endif </td>
                        <td id ="<?php echo 'etat' . $i; ?>" >{{$art->etat}}  </td>
                        <td class="center" >
                            <div class="row">
                                <div class="btn-group btn-group-xs col-lg-2" role="group" >
                                    <button type="button"  id = "{{$art->num_cible}}" class="btn btn-link btn-sm" style="padding-right: 3px;" onclick="preview(this);">Voir</button>
                                    <span class="vl"></span>
                                    @if(Auth::user()->Fonction == 'Responsable du Routage')
                                    {!! Form::open(array('url' => 'https://fenouildeco.000webhostapp.com/public/dashbord/ToutLesCible/' . $art->num_cible , 'class' => 'pull-right')) !!}
                                    {{ Form::hidden('_method', 'DELETE') }}
                                    <button  type="submit"  class="btn btn-link btn-sm" style="padding: 3px; color: red" >Supprime </button>
                                    {{ Form::close() }}
                                    @endif
                                    <span class="vl"></span>
                                    @if(Auth::user()->Fonction == 'Responsable de stratigie')
                                    {!! Form::open(array('url' => 'https://fenouildeco.000webhostapp.com/public/dashbord/ToutLesCible/' . $art->num_cible , 'class' => 'pull-right')) !!}
                                    {{ Form::hidden('_method', 'PATCH') }}
                                    <button  type="submit" id="refus" class="btn btn-link btn-sm" style="padding: 3px; color: red" >Refusé </button>
                                    {{ Form::close() }}
                                    {!! Form::open(array('url' => 'https://fenouildeco.000webhostapp.com/public/dashbord/ToutLesCible/' . $art->num_cible , 'class' => 'pull-right')) !!}
                                    {{ Form::hidden('_method', 'PUT') }}
                                    <button  type="submit" id="acept" class="btn btn-link btn-sm" style="padding: 3px; color: blue" >Accepté </button>
                                    {{ Form::close() }}
                                    @endif

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


    <div id="myModel" class="modal dropdown animated zoomIn col-md-6 smooth-scroll list-unstyled " style="top: 200px; margin-left: 30%;">
        <div class="modal-content animated zoomIn " >

            <div class="content-box-large">
                <div class="panel-heading">
                    <div class="panel-title">Bootstrap dataTables</div>
                </div>
                <div class="panel-body">
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-hover table-bordered" id="example1">
                        <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Adresse</th>
                            <th>Socio Pro</th>
                            <th>Age</th>
                            <th>Email</th>
                            <th>Telephone</th>


                        </tr>
                        </thead>
                        <tbody id = "tab">



                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>




@stop

@section('js')

    <script>
        var preview = function (obj) {
           var tab = document.getElementById("tab");
            tab.innerHTML = "";
           var element = ["name","prenom","Adress","categori_socio","Age","Email","NumTell"];
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({

                type: 'GET',
                url:'https://fenouildeco.000webhostapp.com/public/dashbord/ToutLesCible/' + obj.id ,
                success: function (datas) {




                    datas.forEach(function (data) {

                        var tr = document.createElement('tr');
                        tr.className = "odd gradeX";
                        tab.appendChild(tr);
                        for (X = 0 ;X < 7 ; X++) {
                            var td = document.createElement('td');
                            td.innerText = data["" + element[X]];
                            tr.appendChild(td);
                        }
                        var Model = document.getElementById('myModel');
                        Model.style.display = "block";
                        Model.onclick = function () {
                            Model.style.display = "none";
                            tab.innerHTML = "";
                        }

                    });



                },
                error:function (xhr) {
                    console.log(xhr.responseText);
                }
            });




        };
        $(document).ready(function() {
            $('#example1').dataTable();
        } );
    </script>

    <script src="https://fenouildeco.000webhostapp.com/public/js/jquery.dataTables.min.js"></script>

    <script src="https://fenouildeco.000webhostapp.com/public/js/dataTables.bootstrap.js"></script>

    <script src="https://fenouildeco.000webhostapp.com/public/js/custom.js"></script>
    <script src="https://fenouildeco.000webhostapp.com/public/js/tables.js"></script>

@stop