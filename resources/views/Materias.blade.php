@extends('Plantilla')
@section('titulo', 'Materias')
@section('contenido')
	<h1>Materias</h1>
    <h2>Lista de materias</h2>
    <br>
    <br>
    <br>
    <br>
    <ul>
        @if ($var_materias)
            @foreach($var_materias as $i)
            <li>{{ $i['nombre'] }}</li>    
            @endforeach
        @else
            <p>No hay materias</p>
        @endif
    </ul>
    
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
@endsection
@section('menu')
    <div id="div_nav">
        <nav class="menu">
            <ul>
                <li><a href="/" >Inicio</a></li>
                <li><a href="/alumnos">Alumnos</a></li>
                <li><a href="/profesores" >Profesores</a></li>
            </ul>                
        </nav>
    </div>
@endsection