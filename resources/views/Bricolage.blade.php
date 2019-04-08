@extends('app.indexsquelette')


@section('contenu')

    <section class="et-services-one">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center et-service-sect">
                    <div class="et-services-title">
                        <p class="et-services-sub-title text-thm text-uppercase">A propos des articles</p>
                        <h1 class="text-uppercase">Les Meilleurs Articles <span class="text-thm">Bricolage</span></h1>
                        <div class="et-service-icon">
                            <span class="et-title-line"></span><img src="images/icons/plumber.png" alt=""><span class="et-title-line2"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                @foreach($ArtsDecoration as $art)


                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="et-service-column">
                            <div class="et-service-thumb" onclick="window.location.href = 'Commande/' + {{$art->numéro}} ; ">
                                <img class="img-responsive "  style="height: 300px; width: 100%;" src="images/{{$art->imag}}" alt="">
                                <div class="et-teatmembr-contact" style="margin-bottom: 160px;background-color: red;">New</div>
                                <div class="et-service-overlay">
                                    <div class="et-srvc-ovrly-icon">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="et-service-contnt">
                                <div class="row">
                                    <h3 class="col-lg-6 text-thm">{{$art->titre}}  </h3>
                                    <h3 class="col-lg-6 text-thm"> Prix :{{$art->Prixdevents}}  </h3>
                                </div>

                                <?php echo $art->Désignation ; ?>
                                <a class="text-thm"  href="Commande/{{$art->numéro}}">Plus <i class="lnr lnr-arrow-right" aria-hidden="true"></i></a>
                                <div class="et-slash">//////////////////////////////////////////////////////</div>
                            </div>
                        </div>
                    </div>

                @endforeach


            </div>
        </div>
    </section>





@stop