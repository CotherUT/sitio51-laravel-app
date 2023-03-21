@extends("Plantilla")
@section("titulo", "Alta de materias")
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

@section("contenido")
    <h1>Alta de materias</h1>

    {{-- Utilizar el metodo para editar las materias --}}
    <form method="post" action="{{ route('materias.update', $i) }}">
        @csrf @method('PATCH')
        <label>
            Nombre de la Materia:<br>
            <input name="tbNombre" value="{{ $i->nombre }}"/>
        </label><br/>
        <label>
            Descripcion de la Materia:<br>
            <textarea name="tbDescripcion">{{ $i->descripcion }}</textarea>
        </label><br>
        <button>Guardar</button>
    </form>
@endsection 