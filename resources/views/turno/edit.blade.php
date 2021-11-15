@extends('components.layout')

@section('title', 'Turnos')

@section('content')
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $errors)
                    <li> {{$errors}} </li>
                @endforeach
            </ul>
        </div>
    @endif

    {{ Form::model($bico, array('route' => array('bico.update', $bico->id), 'method' => 'PUT' )) }}
 
   
    {{ Form::label('posto_id', 'Posto') }}
    {{ Form::select('posto_id', $postos) }}
    <br/>

    {{ Form::label('name', 'Nome') }}
    {{ Form::text('name',$turno->name) }}
    <br/>

    {{-- {{ Form::label('horario_inicio', 'Inicio do Turno') }}
    {{ Form::select('horario_inicio', $turno->horario_inicio) }}

    <br/>
    {{ Form::label('horario_fim', 'Fim do Turno') }}
    {{ Form::select('horario_fim', $turno->horario_fim) }}

    <br/> --}}
 

    {{ Form::submit('Enviar') }}
 
    {{ Form::close() }}

    @if (Session::has('message'))
        <div> {{ Session::get('message') }} </div>      
    @endif
    
    <a href="{{ URL::to('bico/') }}">Voltar</a>

@endsection