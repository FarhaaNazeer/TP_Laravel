@extends('layouts.app')

@section('title', 'Inscription')

@section('content')

<body class="page-color-style-6 page-style-6">
    <div class="main-content">
        <section class="section">
            <div class="empty-lg-120 empty-md-100 empty-sm-60 empty-xs-60"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-xs-12">
                        <div class="main-caption text-center color-type-2">
                            <h2 class="h2">Formulaire | Inscription</h2>
                            <div class="empty-sm-5 empty-xs-5"></div>
                            <div class="simple-text md simple-sub-text">
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-xs-12">
                        <div class="empty-sm-70 empty-xs-30"></div>
                        <div class="text-center color-type-2">
                            <h4 class="h4 tt color-type-1">Veuillez remplir ce formulaire afin de créer votre compte</h4>
                        </div>
                        <div class="empty-sm-45 empty-xs-30"></div>
                        <form action="{!! route('save_register_form') !!}" method="post" id="register_form">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <div class="input-field-wrap">
                                        <input type="text" class="input-field @error('name') is-invalid @enderror" placeholder="Votre nom complet" name="name">
                                        <div class="focus"></div>
                                    </div>
                                    @error('name')
                                    <div style="color: #A52A2A;">{{ $message }}</div>
                                    @enderror
                                    <div class="empty-sm-20 empty-xs-20"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <div class="input-field-wrap">
                                        <input type="email" class="input-field @error('email') is-invalid @enderror" name="email" placeholder="Email *" name="email" required="">
                                        <div class="focus"></div>
                                        @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="empty-sm-20 empty-xs-20"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <div class="input-field-wrap">
                                        <input type="password" class="input-field @error('password') is-invalid @enderror" name="password" placeholder="Mot de passe *" name="password" required="">
                                        <div class="focus"></div>
                                        @error('password')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="empty-sm-20 empty-xs-20"></div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="input-field-wrap">
                                        <input type="password" class="input-field @error('confirm-password') is-invalid @enderror" name="password_confirmation" placeholder="Confirmation de mot de passe *" required="">
                                        <div class="focus"></div>
                                    </div>
                                    @error('confirm-password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="empty-sm-20 empty-xs-20"></div>
                                </div>
                            </div>
                            <div class="empty-sm-30 empty-xs-30"></div>
                            <div class="text-center">
                                <div class="page-button button-style-1 type-2">
                                    <input type="submit">
                                    <span class="txt">SUBMIT</span><i></i>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="empty-lg-140 empty-md-100 empty-sm-60 empty-xs-60"></div>
        </section>
    </div>
</body>
@endsection