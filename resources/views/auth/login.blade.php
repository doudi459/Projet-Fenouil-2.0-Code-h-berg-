@extends('app.inscription')




    <!--
    <span class="login100-form-title p-b-59" >
                        S'authentifier
                    </span>


    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
        <span class="label-input100">Email</span>
        <input class="input100" type="text" name="email" placeholder="Email addess...">
        <span class="focus-input100"></span>
    </div>

    <div class="wrap-input100 validate-input" data-validate = "Password is required">
        <span class="label-input100">Mot de pass </span>
        <input class="input100" type="text" name="pass" placeholder="*************">
        <span class="focus-input100"></span>
    </div>


    <div class="container-login100-form-btn">
        <div class="wrap-login100-form-btn">
            <div class="login100-form-bgbtn"></div>
            <button class="login100-form-btn">
                Se connecté
            </button>
        </div>

        <a href="Singup" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
            S'inscrire
            <i class="fa fa-long-arrow-right m-l-5"></i>
        </a>
    </div>
    -->

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                   <span class="login100-form-title p-b-59" >
                        S'authentifier
                    </span>


                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
                            @csrf

                            <div class="form-group row wrap-input100 validate-input">
                                <label for="email" class="label-input100 col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="input100 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row wrap-input100 validate-input">
                                <label for="password" class="label-input100 col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class=" input100 form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif

                                </div>
                            </div>



                            <div class=" container-login100-form-btn ">
                                <div class="wrap-login100-form-btn">
                                    <div class="login100-form-bgbtn"></div>
                                    <button type="submit" class=" login100-form-btn ">
                                        {{ __('Login') }}
                                    </button>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input " type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>

                                @if (Route::has('password.request'))

                                        <a class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30 "  href="{{ route('password.request') }}">
                                            Mot de passe oublie
                                            <i class="fa fa-long-arrow-right m-l-5"></i>
                                        </a>

                                @endif
                                <a href="{{'register'}}" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
                                    s'inscrire
                                    <i class="fa fa-long-arrow-right m-l-5"></i>
                                </a>

                            </div>






                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
