@extends('components.layout')

@section('title', 'Leituras')

@section('content')
    
        <h2>Visualizar</h2>
    <ul>
        <li>Criação:              {{ Carbon\Carbon::parse($leitura->create_at)->format('d/m/Y H:i') }} </li>
        <li>Última modificação:   {{ Carbon\Carbon::parse($leitura->update_at)->format('d/m/Y H:i') }} </li>
        <li>Posto:                {{ $leitura->posto->name }}  </li>
        <li>Bomba:                {{ $leitura->bomba->id}}     </li>
        <li>Bico:                 {{ $leitura->bico->id }}     </li>
        <li>Turno:                {{ $leitura->turno->name}}   </li>
        <li>Leitura:              {{ $leitura->leitura  }}     </li>

    </ul>
    
    <a href="{{ URL::to('leitura/') }}">Voltar</a>

@endsection