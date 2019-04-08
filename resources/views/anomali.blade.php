@extends('app.Squelette')


@section('contenu')

    <div class="content-box-large">
        <div class="panel-heading">
            <div class="panel-title">Toutes les commandes</div>
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
                @foreach($comme as $art)
                    <tr class="odd gradeX">
                        <td id ="<?php echo 'Num' . $i ;?>">{{$art->num_commande}}</td>
                        <td id ="<?php echo 'titre' . $i; ?>"> {{$art->Prix}}</td>
                        <td class="center" >
                            <div class="row">

                                <div class="btn-group btn-group-xs col-lg-2 col-lg-offset-9" role="group" >
                                    <button type="button"  id = "{{$art->num_commande}}" class="btn btn-link btn-sm" style="padding-right: 3px;" onclick="preview(this);">Plus d'informations</button>
                                    <span class="vl"></span>
                                    {!! Form::open(array('url' => '/dashbord/editanomali/' . $art->num_commande , 'class' => 'pull-right')) !!}
                                    {{ Form::hidden('_method', 'GET') }}
                                    <button  type="submit" class="btn btn-link btn-sm" style="padding: 3px; color: red" >Refuser </button>
                                    {{ Form::close() }}
                                    <span class="vl"></span>
                                    {!! Form::open(array('url' => '/dashbord/anomalie/' . $art->num_commande , 'class' => 'pull-right')) !!}
                                    {{ Form::hidden('_method', 'GET') }}
                                    <button type="submit" id = "{{$art->numéro}}" onclick="Edite(this);" class="btn  btn-sm btn-light" style="padding-left: 3px;">Accepter</button>
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


    <div id="myModal2" class="modal dropdown animated zoomIn col-md-7 " style="top: 200px; margin-left: 20%;">
        <div class="card card-register mx-auto mt-4">
        <nav id="menuzord" class="menuzord">
            <ul class="menuzord-menu " style="margin-left: 50%">
                
                <li><a href="#" >Carte</a></li>

            </ul>
        </nav>
        

            <div class="container">


                    


                        <div class="from-group">
                            <div class="form-label-group">
                                <label class="label-input100" for="firstName">Numero De Carte</label>
                                <input type="number" id="Numero" class="form-control input100" style="width: 90%" required="required" autofocus="autofocus">

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-5">
                                    <div class="form-label-group" style="margin-left: 20%">
                                        <label class="label-input100" for="firstName">Date d'expiration </label>
                                        <input type="date" id="Date" class="form-control input100 " style="width: 70%;" required="required" autofocus="autofocus">

                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-label-group" style="margin-left: 40%">
                                        <label class="label-input100" for="Prix de vent">CVC/CVV</label>
                                        <input type="number" id="CVC" min="0" max="9999" class="form-control input100 " style="width: 40%;" placeholder="CVC" required="required">

                                    </div>
                                </div>
                            </div>
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
        var preview = function (obj) {
           
            
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.get("/public/dashbord/anomalie/" + obj.id + "/edit",{}, function (data) {
            console.log(data);
            $('#Numero').val(data[0]) ;
            $('#Date').val(data[2]);
            $('#CVC').val(data[1]);
             $('#myModal2').css('display','block'); 
              document.getElementById('myModel2').onclick = function () {
                            Model.style.display = "none";
                            
                        }
            });
            
            
            
            
            
        }
        
    </script>

@stop