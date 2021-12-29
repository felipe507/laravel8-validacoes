<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <main role="main">
        <div class="row">
            <div class="container col-md-8 offset-md-2">
                <div class="card border">
                    <div class="card-head">
                        <h3 class="card-title">Cadastro de Cliente</h3>
                    </div>
                </div>
                <div class="card-body">
                    <form action="/clientes" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nome">Nome do cliente</label>
                            <input type="text" name="nome" id="nome" class="form-control {{ $errors->has('nome') ? 'is-invalid' : ''}} " placeholder="Nome do cliente">
                            @if($errors->has('nome'))
                                <div class="invalid-feedback">
                                    {{$errors->first('nome')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="idade">Idade</label>
                            <input type="number" name="idade" id="idade" class="form-control {{ $errors->has('idade') ? 'is-invalid' : ''}} " placeholder="Idade">
                            @if($errors->has('idade'))
                                <div class="invalid-feedback">
                                    {{$errors->first('idade')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="endereco">Endereco</label>
                            <input type="text" name="endereco" id="endereco" class="form-control {{ $errors->has('endereco') ? 'is-invalid' : ''}}" placeholder="Endereço">
                            @if($errors->has('idade'))
                                <div class="invalid-feedback">
                                    {{$errors->first('idade')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <input type="text" name="telefone" id="telefone" class="form-control {{ $errors->has('telefone') ? 'is-invalid' : ''}}" placeholder=" Telefone">  
                            @if($errors->has('idade'))
                                <div class="invalid-feedback">
                                    {{$errors->first('telefone')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : ''}}" placeholder="Email">  
                                @if($errors->has('idade'))
                                <div class="invalid-feedback">
                                    {{$errors->first('email')}}
                                </div>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                        <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    {{-- @if(isset($errors) && count($errors) > 0)
        @foreach($errors->all() as $error) 
            <div class="alert alert-danger">
                <p>{{$error}}</p>
            </div>
        @endforeach
    @endif --}}
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>