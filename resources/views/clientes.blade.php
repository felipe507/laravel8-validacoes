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
                    <table class="table table-bordered table-hover" id="tabelaprodutos">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Idade</th>
                                <th>Endereco</th>
                                <th>Email</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($clientes as $cliente)
                            <tr>
                                <td>{{$cliente->nome}}</td>
                                <td>{{$cliente->idade}}</td>
                                <td>{{$cliente->endereco}}</td>
                                <td>{{$cliente->telefone}}</td>
                                <td>
                                    <a href="{{route('editacliente', $cliente->id)}}" class="btn btn-sm btn-primary">Editar</a>
                                    <a href="{{route('deletecliente', $cliente->id)}}" class="btn btn-sm btn-danger">Excluir</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                <a href="{{route('novocliente')}}" class="btn btn-sm btn-primary">Novo Cliente</a>
                </div>
            </div>
        </div>
    </main>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>