@extends('Plantilla')
@section('titulo', 'Materias | ' . $i->nombre)

@section('menu')
    <div id="div_nav">
        <nav class="menu">
            <ul>
                <li><a href="/">Inicio</a></li>
                <li><a href="/alumnos">Alumnos</a></li>
                <li><a href="/carreras">Carreras</a></li>
                <li><a href="/materias">Materias</a></li>
                <li><a href="/profesores">Profesores</a></li>
                <li><a href="/contactanos">Contactanos</a></li>
            </ul>
        </nav>
    </div>
@endsection

@section('contenido')
    <h1>{{ $i->nombre }}</h1>
    <a href="{{ route('materias.edit', $i) }}">Editar materia</a>
    <form method="post">
        @csrf @method('DELETE')
        <button>Eliminar Materia</button>
    </form>
    <p>{{ $i->descripcion }}</p>
    <p>{{ $i->created_at }}</p>
@endsection
