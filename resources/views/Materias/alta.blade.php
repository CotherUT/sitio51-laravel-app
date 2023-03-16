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

    {{-- Utilizar el metodo pos y mandar a llamar al metodo store --}}
    <form method="post" action="{{ route('materias.store') }}">
        @csrf
        <label>
            Nombre de la Materia:<br>
            <input name="tbNombre" />
        </label><br/>
        <label>
            Descripcion de la Materia:<br>
            <input name="tbDescripcion" />
        </label><br>
        <button>Guardar</button>
    </form>
@endsection