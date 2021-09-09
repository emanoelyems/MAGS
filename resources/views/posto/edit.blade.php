<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Posto</title>
</head>
<body>
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $errors)
                    <li> {{$errors}} </li>
                @endforeach
            </ul>
        </div>
    @endif

    {{ Form::model($posto, array('route' => array('posto.update', $posto->id), 'method' => 'PUT' )) }}
 
    {{ Form::label('cnpj', 'CNPJ') }}
    {{ Form::text('cnpj', $posto->cnpj) }}
    <br/>
    {{ Form::label('name', 'Nome') }}
    {{ Form::text('name',  $posto->name) }}
    <br/>
    {{ Form::label('email', 'Email') }}
    {{ Form::text('email',  $posto->email) }}
    <br/>
    {{ Form::label('cell', 'Celular') }}
    {{ Form::text('cell', $posto->cell) }}
    <br/>
    {{ Form::label('tel', 'Telefone') }}
    {{ Form::text('tel',  $posto->tel) }}
    <br/>
    {{ Form::label('address', 'Endereço') }}
    {{ Form::text('address',  $posto->address) }}
    <br/>
    {{ Form::label('bomba', 'Bomba') }}
    {{ Form::text('bomba', $posto->bomba) }}
    <br/>
    {{ Form::label('bico', 'Bico') }}
    {{ Form::text('bico', $posto->bico) }}
    <br/>
    {{ Form::label('turno', 'Quantidade de Turnos') }}
    {{ Form::text('turno', $posto->turno) }}
    <br/>
    {{ Form::label('cicloTurno', 'Ciclo do Turno') }}
    {{ Form::text('cicloTurno', $posto->cicloTurno) }}
    <br/>
    {{ Form::submit('Enviar') }}
 
    {{ Form::close() }}

    @if (Session::has('message'))
        <div> {{ Session::get('message') }} </div>      
    @endif
    
    <a href="{{ URL::to('posto/') }}">Voltar</a>

</body>
</html>