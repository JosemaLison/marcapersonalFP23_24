@extends('layout.master')
    @section('menu')
    @parent
        <p>Este condenido es añadido al menú principal.</p>
    @endsection
    @section('content')
        @for ($i = 0; $i < 10; $i++)
             <h1>Fila {{ $i }} ¡Hola {{$nombre}} {{$apellidos}}!</h1>
        @endfor
    @endsection

