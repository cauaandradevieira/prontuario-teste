@extends('layouts.principal')
@section('titulo', 'Register')

@section('conteudo')

<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header"><h3 class="text-center font-weight-light my-4">Registre-se</h3></div>
                            <div class="card-body">
                                <form action="{{route('register')}}" method="POST">
                                    @csrf()
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inpuName" type="text" name="name" placeholder="Nome" />
                                        <label for="inputEmail">Nome</label>
                                    </div>
                                    
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputEmail" type="email" name="email" placeholder="Email" />
                                        <label for="inputEmail">Endereço de Email</label>
                                    </div>

                                    <select name="perfil_id" id="perfil_id">
                                        <option value="">Selecione um perfil</option>
                                        @foreach ($perfis as $perfil)
                                            <option value="{{ $perfil->id }}">{{$perfil->name}}</option>
                                        @endforeach
                                    </select>
                                    <div id="inputs"></div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputPassword" type="password" name="password" placeholder="Senha" />
                                        <label for="inputPassword">Senha</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputPassword" type="password" name="password_confirmation" placeholder="Confirmar senha" />
                                        <label for="inputPassword">Confirmar senha</label>
                                    </div>
                                
                                     @error('name')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    @error('email')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    @error('password')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <button type="submit" class="btn btn-primary">Entrar</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center py-3">
                                <div class="small"><a href="{{route('loginpage')}}">Já tem uma conta? Entre!</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
@vite('resources/js/inputPefil.js')
@endsection