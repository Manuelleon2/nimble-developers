{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="card-body">

            <x-jet-validation-errors class="mb-3 rounded-0" />

            @if (session('status'))
                <div class="alert alert-success mb-3 rounded-0" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <x-jet-label value="{{ __('Email') }}" />

                    <x-jet-input class="{{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email"
                        :value="old('email')" required />
                    <x-jet-input-error for="email"></x-jet-input-error>
                </div>

                <div class="mb-3">
                    <x-jet-label value="{{ __('Password') }}" />

                    <x-jet-input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                        type="password" name="password" required autocomplete="current-password" />
                    <x-jet-input-error for="password"></x-jet-input-error>
                </div>

                <div class="mb-3">
                    <div class="custom-control custom-checkbox">
                        <x-jet-checkbox id="remember_me" name="remember" />
                        <label class="custom-control-label" for="remember_me">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>

                <div class="mb-0">
                    <div class="d-flex justify-content-end align-items-baseline">
                        @if (Route::has('password.request'))
                            <a class="text-muted me-3" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                        <x-jet-button>
                            {{ __('Log in') }}
                        </x-jet-button>
                    </div>
                </div>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout> --}}

@extends('layouts.layout')

@section('content')

    <body id="Fondo_init">
        <h1 id="TituloPrincipal"><b>Donde Esta el Bug?<b></h1>
        <div class="container" id="Container-Login-registro"><br>
            <div class="container">
                <!-- Pills navs -->
                <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="tab-login" data-mdb-toggle="pill" href="#pills-login" role="tab"
                            aria-controls="pills-login" aria-selected="true">Iniciar
                            Sesion</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="tab-register" data-mdb-toggle="pill" href="#pills-register" role="tab"
                            aria-controls="pills-register" aria-selected="false">Registrarse</a>
                    </li>
                </ul>
                <!-- Pills navs -->

                <!-- Pills content -->
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">


                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3">

                                <x-jet-label class="" for="email" value="{{ __('Correo Electronico') }}" />
                                <x-jet-input class="{{ $errors->has('email') ? 'is-invalid' : '' }}" type="email"
                                    name="email" :value="old('email')" required />
                                <x-jet-input-error for="email"></x-jet-input-error>
                            </div>

                            <div class="mb-3">
                                <x-jet-label value="{{ __('Contraseña') }}" />

                                <x-jet-input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                    type="password" name="password" required autocomplete="current-password" />
                                <x-jet-input-error for="password"></x-jet-input-error>
                            </div>


                            <div class="mb-3">
                                <div class="d-flex justify-content-end align-items-baseline">
                                    @if (Route::has('password.request'))
                                        <a class="text-muted me-3" href="{{ route('password.request') }}">
                                            {{ __('Olvidaste tu contraseña?') }}
                                        </a>
                                    @endif

                                    <x-jet-button class="btn btn-success">
                                        {{ __('INICIAR SESION') }}
                                    </x-jet-button>
                                </div>
                            </div>
                        </form>
                        {{-- <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <!-- Usuario input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="email" name="email" class="form-control" />
                                <label class="form-label" for="email">Usuario</label>
                            </div>

                            <!-- Contraseña input -->
                            <div class="form-outline mb-4">
                                <input type="password" id="password" class="form-control loginPassword" />
                                <label class="form-label" for="password">Contraseña</label>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-success btn-block mb-4">Iniciar Sesion</button>
                        </form> --}}
                    </div>
                    <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
                        {{-- <form>
                            <!-- Nombre input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="registerName" class="form-control" />
                                <label class="form-label" for="registerName">Nombre</label>
                            </div>

                            <!-- Usuario input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="registerUsername" class="form-control" />
                                <label class="form-label" for="registerUsername">Usuario</label>
                            </div>

                            <!-- Correo input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="registerEmail" class="form-control" />
                                <label class="form-label" for="registerEmail">Correo Electronico</label>
                            </div>

                            <!-- Contraseña input -->
                            <div class="form-outline mb-4">
                                <input type="password" id="registerPassword" class="form-control" />
                                <label class="form-label" for="registerPassword">Contraseña</label>
                            </div>

                            <!-- Repetir Contraseña input -->
                            <div class="form-outline mb-4">
                                <input type="password" id="registerRepeatPassword" class="form-control" />
                                <label class="form-label" for="registerRepeatPassword">Repetir Contraseña</label>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-success btn-block mb-3">Registrar</button>
                        </form> --}}

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="mb-3">
                                <x-jet-label value="{{ __('Nombre') }}" />

                                <x-jet-input class="{{ $errors->has('name') ? 'is-invalid' : '' }}" type="text"
                                    name="name" :value="old('name')" required autofocus autocomplete="name" />
                                <x-jet-input-error for="name"></x-jet-input-error>
                            </div>

                            <div class="mb-3">
                                <x-jet-label value="{{ __('Correo Electronico') }}" />

                                <x-jet-input class="{{ $errors->has('email') ? 'is-invalid' : '' }}" type="email"
                                    name="email" :value="old('email')" required />
                                <x-jet-input-error for="email"></x-jet-input-error>
                            </div>

                            <div class="mb-3">
                                <x-jet-label value="{{ __('Contraseña') }}" />

                                <x-jet-input class="{{ $errors->has('password') ? 'is-invalid' : '' }}" type="password"
                                    name="password" required autocomplete="new-password" />
                                <x-jet-input-error for="password"></x-jet-input-error>
                            </div>

                            <div class="mb-3">
                                <x-jet-label value="{{ __('Repetir Contraseña') }}" />

                                <x-jet-input class="form-control" type="password" name="password_confirmation" required
                                    autocomplete="new-password" />
                            </div>

                            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                <div class="mb-3">
                                    <div class="custom-control custom-checkbox">
                                        <x-jet-checkbox id="terms" name="terms" />
                                        <label class="custom-control-label" for="terms">
                                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
    'terms_of_service' => '<a target="_blank" href="' . route('terms.show') . '">' . __('Terms of Service') . '</a>',
    'privacy_policy' => '<a target="_blank" href="' . route('policy.show') . '">' . __('Privacy Policy') . '</a>',
]) !!}
                                        </label>
                                    </div>
                                </div>
                            @endif

                            <div class="mb-3">
                                <div class="d-flex justify-content-end align-items-baseline">
                                    <x-jet-button class="btn btn-success btn-block mb-3">
                                        {{ __('Registrar') }}
                                    </x-jet-button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Pills content -->
            </div>
        </div>

        <div class="container" id="Container-Imagen-Principal">
            <img src="{{ asset('images/Detective.png') }}" alt="Detective" width="80%" height="80%">
        </div>
    </body>
@endsection
