@extends('layout.auth-layout')


@section('class-body', 'bg-primary')

@section('links')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endsection

@section('content') 

<div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login Admin</h3></div>
                                    <div class="card-body">
                                        @include('layout.validation-errors')
                                        @include('layout.alerts')
                                        <form action="{{ route('login.store') }}" method=POST>
                                            @csrf
                                            <div class="form-floating mb-3">
                                                <input name="email" class="form-control" id="inputText" type="email" placeholder="name@example.com" />
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input name="password" class="form-control" id="inputPassword" type="password" placeholder="Password" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input name="remember" class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                            </div>
                                            @include('layout.recaptcha')    


                                            <div class="d-flex align-it ems-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary">login</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><b>CaspianVpn</b></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            
@endsection