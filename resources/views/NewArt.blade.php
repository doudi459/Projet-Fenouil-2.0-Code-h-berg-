@extends('app.Squelette')




@section('contenu')
    {!! Form::open(['methode' => 'post','action' => 'ArticleController@store' ,'files' => true]) !!}
    <div class="container-box-large" >

        <div class="row ">

    <div class="col-lg-8 col-sm-8">
        <div class="card">
        <div class="from-group">
            {!! Form::label('tite1','Titre:',["class" => "label-input100"]) !!}
            {!! Form::text('text',null,['class' => 'form-control input-rounded input100' ,'placeholder' => 'Entrez le titre ici' ]) !!}

        </div>

            <div class="from-group">
                {!! Form::label('Prix','Prix de vente:',["class" => "label-input100"]) !!}
                {!! Form::number('Prix de vente',null,['class' => 'form-control input-rounded input100' ,'placeholder' => 'Entrez le prix ici' ]) !!}

            </div>

            <div class="from-group">
                {!! Form::label('Categorie','Categorie de l\'Article:',["class" => "label-input100"]) !!}

                <select name="Categori" id="categori" class="default_type input100" style="display: block; width: 100%;height: 50px;">
                    <option  value="Décoration">
                        Décoration
                    </option>
                    <option value="Bricolage">
                        Bricolage
                    </option>
                </select>

            </div>



            <div class="card" id="car">
            <div class="card-body">
                <h4 class="card-title" style="border-bottom: 1px solid gray">Article</h4>


                <div class="form-group">

                    {!! Form::label('tite','Contenu:',["class" => "label-input100"]) !!}
                    {!! Form::textarea('comment',null,['class' => 'textarea  form-control rounded border border-primary' ,'id' => 'tinymce_basic', 'row' => '15', 'style' => 'height: 200px;' ]) !!}
                </div>


            </div>





            {!! Form::submit('Enregistrer' , ['class' => 'btn btn-success btn-rounded' ,'style' => 'color : black ;font-size:20px;']) !!}
            {{ csrf_field() }}
        </div>


        </div>
    </div>
    <div class="col-lg-4 col-sm-4">
        <div class="card" style="border-bottom: 18px solid #3C8DBC;padding-bottom: 5px">
            <div class="card-header" style="text-align: center;">
                <strong class="card-title mb-3">Sélectioner image</strong>
            </div>
            <div class="card-body">

                <div class="mx-auto d-block m-t-5">
                    <img class=" mx-auto d-block img-responsive" id = "img" src="" alt=" " style="height: 200px;width: 200px;">


                </div>
                <hr>
                {!! Form::file('file' , ['class' => 'btn btn-default' ,'accept' => 'image/*' , 'onchange' => 'loadFile(event)']) !!}
            </div>
        </div>
    </div>

        </div>
    </div>
    {!! Form::close() !!}
@stop
@section('js')

    <script type="text/javascript">

        var loadFile = function(event) {
            var output = document.getElementById('img');
            output.src = URL.createObjectURL(event.target.files[0]);
        };

    </script>
    <script src="https://fenouildeco.000webhostapp.com/public/js/bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.js"></script>
    <script src="https://fenouildeco.000webhostapp.com/public/js/bootstrap-wysihtml5/src/bootstrap-wysihtml5.js"></script>

    <script src="https://fenouildeco.000webhostapp.com/public/js/ckeditor/ckeditor.js"></script>
    <script src="js/ckeditor/adapters/jquery.js"></script>

    <script type="text/javascript" src="https://fenouildeco.000webhostapp.com/public/js/tinymce/tinymce.min.js"></script>
    <script src="https://fenouildeco.000webhostapp.com/public/js/editors.js"></script>
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

@stop
