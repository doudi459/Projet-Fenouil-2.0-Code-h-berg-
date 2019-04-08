@extends('app.inscription')


@section('contenu')

    <span class="login100-form-title p-b-59">
						Inscription
					</span>

    <div class="wrap-input100 validate-input" data-validate="Name is required">
        <span class="label-input100">Nom</span>
        <input class="input100" type="text" name="name" placeholder="Name...">
        <span class="focus-input100"></span>
    </div>

    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
        <span class="label-input100">Email</span>
        <input class="input100" type="text" name="email" placeholder="Email addess...">
        <span class="focus-input100"></span>
    </div>

    <div class="wrap-input100 validate-input" data-validate="Username is required">
        <span class="label-input100">Nom d'utilisateur </span>
        <input class="input100" type="text" name="username" placeholder="Username...">
        <span class="focus-input100"></span>
    </div>

    <div class="wrap-input100 validate-input" data-validate = "Password is required">
        <span class="label-input100">Mot de pass </span>
        <input class="input100" type="text" name="pass" placeholder="*************">
        <span class="focus-input100"></span>
    </div>

    <div class="wrap-input100 validate-input" data-validate = "Repeat Password is required">
        <span class="label-input100">Confirmation du mot de pass</span>
        <input class="input100" type="text" name="repeat-pass" placeholder="*************">
        <span class="focus-input100"></span>
    </div>



    <div class="container-login100-form-btn">
        <div class="wrap-login100-form-btn">
            <div class="login100-form-bgbtn"></div>
            <a href="insert" class="login100-form-btn">
                Confirmé
            </a>
        </div>

        <a href="login" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
            Connéction
            <i class="fa fa-long-arrow-right m-l-5"></i>
        </a>
    </div>

@stop