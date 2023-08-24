@extends('layout')
@section('conteudo')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">
                                            Acesso para colaboradores.
                                            <p class="p-min">Caso tenha alguma dúvida ou problema, <a
                                                    href="https://meucontatoai.com//hefesto">fale com o suporte!</a></p>
                                        </h1>
                                    </div>
                                    <form class="user" method="POST" action="{{ route('login_action') }}">
                                        <input type="hidden" value={{ csrf_token() }} name="_token">

                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="email"
                                                placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" name="password"
                                                placeholder="Senha">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Lembrar login</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
