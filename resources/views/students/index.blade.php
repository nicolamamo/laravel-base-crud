@extends('layouts.app')

@section('page-title', 'Lista studenti')

@endsection

@section('content')
    <ol>
        @foreach ($studenti as $studente => $value)
            <p>{{$studente->name}}</p>
    </ol>

    @endforeach
@endsection
