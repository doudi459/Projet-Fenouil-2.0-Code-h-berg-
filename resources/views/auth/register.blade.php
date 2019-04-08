@extends('app.inscription')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                 <span class="login100-form-title p-b-59" >
                       S'inscrire
                    </span>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" class="login100-form validate-form">
                        @csrf

                        <div class="form-group row wrap-input100 validate-input">
                            <label for="name" class=" label-input100 col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="input100 form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row wrap-input100 validate-input">
                            <label for="prenom" class="label-input100 col-md-4 col-form-label text-md-right">{{ __('Prenom') }}</label>

                            <div class="col-md-6">
                                <input id="prenom" type="text" class=" input100 form-control{{ $errors->has('prenom') ? ' is-invalid' : '' }}" name="prenom" value="{{ old('prenom') }}" required autofocus>

                                @if ($errors->has('prenom'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('prenom') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row wrap-input100 validate-input">
                            <label for="age" class=" label-input100 col-md-4 col-form-label text-md-right">{{ __('Age') }}</label>

                            <div class="col-md-6">
                                <input id="age" type="number" class="input100 form-control{{ $errors->has('age') ? ' is-invalid' : '' }}" name="age" value="{{ old('age') }}" required autofocus>

                                @if ($errors->has('age'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('age') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row wrap-input100 validate-input">
                            <label for="age" class=" label-input100 col-md-4 col-form-label text-md-right">{{ __('Categorie') }}</label>

                            <div class="col-md-6">
                                <select id="categori" type="text" class="input100 {{ $errors->has('categori') ? ' is-invalid' : '' }}" name="categori" value="{{ old('categori') }}" required autofocus>
                                    <option  value=" Agriculteurs exploitants ">
                                        Agriculteurs exploitants
                                    </option>
                                    <option value="Artisans, commerçants et chefs d’entreprise ">
                                        Artisans, commerçants et chefs d’entreprise
                                    </option>
                                    <option  value="Cadres et professions intellectuelles supérieures">
                                        Cadres et professions intellectuelles supérieures
                                    </option>
                                    <option value="Professions Intermédiaires ">
                                        Professions Intermédiaires
                                    </option>
                                    <option  value="Employés">
                                        Employés
                                    </option>
                                    <option value="Ouvriers">
                                        Ouvriers
                                    </option>
                                </select>
                                @if ($errors->has('categori'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('categori') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row wrap-input100 validate-input">
                            <label for="datenessance" class="label-input100 col-md-4 col-form-label text-md-right">{{ __('Date de Naissance') }}</label>
                            <div class="col-md-6">
                                <input id="datenessance" type="date" class="input100 form-control{{ $errors->has('datenessance') ? ' is-invalid' : '' }}" name="datenessance" value="{{ old('datenessance') }}" min="1930-01-01" max="2018-12-31" required autofocus>

                                @if ($errors->has('datenessance'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('datenessance') }}</strong>
                                    </span>
                                @endif

                            </div>

                        </div>



                        <div class="form-group row wrap-input100 validate-input">
                            <label for="email" class="label-input100 col-md-4 col-form-label text-md-right">{{ __('adresse email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="input100 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row wrap-input100 validate-input">
                            <label for="adress" class="label-input100 col-md-4 col-form-label text-md-right">{{ __('Adresse') }}</label>

                            <div class="col-md-6">
                                <input id="adress" type="text" class="input100 form-control{{ $errors->has('adress') ? ' is-invalid' : '' }}" name="adress" value="{{ old('adress') }}" required autofocus>

                                @if ($errors->has('adress'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('adress') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row wrap-input100 validate-input">
                            <label for="numtell" class="label-input100 col-md-4 col-form-label text-md-right">{{ __('Numero de Téléphone') }}</label>

                            <div class="col-md-6">
                                <input id="numtell" type="text" class="input100 form-control{{ $errors->has('numtell') ? ' is-invalid' : '' }}" name="numtell" value="{{ old('numtell') }}" required autofocus>

                                @if ($errors->has('numtell'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('numtell') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row wrap-input100 validate-input">
                            <label for="password" class="label-input100 col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="input100 form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row wrap-input100 validate-input">
                            <label for="password-confirm" class="label-input100 col-md-4 col-form-label text-md-right">{{ __('Confirmation du mot de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="input100 form-control" name="password_confirmation" required>
                            </div>
                        </div>


                        <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <button type="submit" class="login100-form-btn">
                                    {{ __('Creer un compte') }}
                                </button>
                            </div>


                            <a href="{{'login'}}" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
                                se connecter
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
