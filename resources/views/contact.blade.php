@extends('app.Squelette')




@section('siderbar')

<li class="nav-label">Edition</li>
<li class="nav-devider"></li>
<li> <a class="has-arrow " href="#" aria-expanded="false" style="background-color: #1e1e1e;" ><i class="fa fa-file"></i><span class="hide-menu">Publicité</span></a>
    <ul aria-expanded="false" class="collapse">
        <li><a href="page.php">Toutes les Pubs</a></li>
        <li><a href="ajouterpage.php">nouvelle Publicite</a></li>

    </ul>
</li>
<li> <a class="has-arrow "  href="#" aria-expanded="false" style="background-color: #1e1e1e;" ><i class="fa fa-edit"></i><span class="hide-menu">Article</span></a>
    <ul aria-expanded="false" class="collapse">
        <li><a href="article.php">Tous les articles</a></li>
        <li><a href="ajouterarticle.php">Ajouter nouveau</a></li>


    </ul>
</li>

<li> <a class="has-arrow  " href="#" aria-expanded="false" style="background-color: #1e1e1e;" ><i class="fa fa-camera"></i><span class="hide-menu">Multimédia</span></a>
    <ul aria-expanded="false" class="collapse">
        <li><a href="bibliotheque.php">Bibliothèque</a></li>
        <li><a href="#">Ajouter nouveau contenu</a></li>

    </ul>
</li>

<li class="nav-label">Application</li>
<li class="nav-devider"></li>

<li> <a class="has-arrow  " href="#" aria-expanded="false" style="background-color: #1e1e1e;"><i class="fa fa-users"></i><span class="hide-menu">Users</span></a>
    <ul aria-expanded="false" class="collapse">
        <li><a href="consult.php">Tous les users</a></li>
        <li><a href="ajouteruser.php">Ajouter nouveau user</a></li>

    </ul>
</li>

<li> <a class="has-arrow  " href="#" aria-expanded="false" style="background-color: #1e1e1e;"><i class="fa fa-cog"></i><span class="hide-menu">Parametres</span></a>
    <ul aria-expanded="false" class="collapse">
        <li><a href="#">Generale</a></li>
        <li><a href="#">Edition</a></li>
        <li><a href="#">Multimedia</a></li>
    </ul>
</li>


@stop





@section('contenu')

<div class="col-lg-2"></div>
<div class="card col-lg-8">
    <div class="col-lg-12 ">
        <h3 class="text-uppercase">Contacté les client </h3>

        <form id="contact_form" name="contact_form" class="contact-form" action="" method="post" novalidate="novalidate">
            <div class="messages"></div>
            <div class="row">

                <div class="col-md-6">
                    <div class="form-group">
                        <input id="form_name" name="form_name" class="form-control et-form-control" placeholder=" Nom" required="required" data-error="Name is required." type="text">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input id="form_email" name="form_email" class="form-control et-form-control required email" placeholder="Email " required="required" data-error="Email is required." type="email">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input id="form_phone" name="form_phone" class="form-control et-form-control required" placeholder="Téléphone" required="required" data-error="Phone Number is required." type="text">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input id="form_subject" name="form_subject" class="form-control et-form-control required" placeholder="Objectif" required="required" data-error="Subject is required." type="text">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <textarea id="form_message" name="form_message" class="form-control et-form-control required" rows="4" placeholder="Message" required="required" data-error="Message is required."></textarea>
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group text-right">
                <input id="form_botcheck" name="form_botcheck" class="form-control et-form-control" value="" type="hidden">
                <button type="submit" class="btn btn-lg btn-block et-button-styledark" data-loading-text="Getting Few Sec...">Envoyer un Email</button>
            </div>
        </form>
    </div>
</div>

@stop