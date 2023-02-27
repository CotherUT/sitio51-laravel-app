@extends('Plantilla')
@section('titulo', 'Contactanos')
@section('menu')
    <div id="div_nav">
        <nav class="menu">
            <ul>
                <li><a href="/" >Inicio</a></li>
                <li><a href="/alumnos">Alumnos</a></li>
                <li><a href="/carreras">Carreras</a></li>
                <li><a href="/materias" >Materias</a></li>
                <li><a href="/profesores" >Profesores</a></li>
                <li><a href="/contactanos" >Contactanos</a></li>
            </ul>                
        </nav>
    </div>
@endsection

@section('contenido')
    <br>
    <br>
    <br>
    <br>
    <h1>Contactanos</h1>
    <form method='post' action="{{ route('contactanos') }}">
        @csrf
        <input name='nombre' placeholder='Asunto'/>
        {!! $errors->first('nombre', '<small>:message</small>') !!}
        <br>
        <input name='correo' placeholder='Correo'/>
        {!! $errors->first('correo', '<small>:message</small>') !!}
        <br>
        <input name='asunto' placeholder='Asunto'/>
        {!! $errors->first('asunto', '<small>:message</small>') !!}
        <br>
        <textarea name='mansaje' placeholder='Mensaje'></textarea>
        {!! $errors->first('mensaje', '<small>:message</small>') !!}
        <br>
        <button>Enviar</button>
    </form>
@endsection