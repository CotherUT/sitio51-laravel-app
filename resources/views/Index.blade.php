@extends('Plantilla')
@section('contenido')
    <!-- ======= SECCION SLIDER ======= -->
    <section class="carrusel">
        <ul>
            <li><img src="imagenes/slide/slide-1.jpg" ></li>
            <li><img src="imagenes/slide/slide-2.jpg" ></li>
            <li><img src="imagenes/slide/slide-3.jpg" ></li>
        </ul><br>
    </section> <!-- ======= FIN SECCION SLIDER ======= -->
    <section>
        <br>
        <br>
        
        <h1> PERFIL DE EGRESO </h1><br>
        <a name="perfil"></a>       
        <table width="100%">
            <tr>
                <td width="45%">
                     <h3>La carrera de Ingenieria en Desarrollo y Gestión de Software es ideal para aprender la correcta programación. Aquí aprenderas Desarrollo de escritorio, desarrollo móvil, gestión de base de datos, desarrollo web, entre otros.</h3>
                </td>
                <td width="10%">     </td>
                <td width="45%">
                    <ul>
                        <li>Dirigir proyectos del área de las tecnologías de la información para contribuir con la productividad y logro en los objetivos estratégicos de las empresas y organizaciones. </li>
                        <li> Evaluar los sistemas de información existentes para establecer acciones de mejora e innovación.</li>
                        <li>Adquiere habilidades para la correcta escritura de codigo de programación. </li>
                    </ul>
                </td>
            </tr>
        </table><br><br>
        <div id="div"> </div><br><br>

    </section>
    <section>
         <h1> SERVICIOS </h1><br>
         <a name="servicios"></a>
         <table>
                <tr>
                    <td>
                        <a href=""><img class="img_table" src="imagenes/sugerencias.png" /></a>
                    </td>
                    <td>
                        <a href=""><img class="img_table" src="imagenes/transparencia.png" /></a>
                    </td>
                    <td>
                        <a href=""><img class="img_table" src="imagenes/recorrido virtual.png" /></a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href=""><img class="img_table" src="imagenes/occ.png" /></a>
                    </td>
                    <td>
                        <a href=""><img class="img_table" src="imagenes/privacidad.png" /></a>
                    </td>
                    <td>
                        <a href=""><img class="img_table" src="imagenes/financieros.png" /></a>
                    </td>
                </tr>
            </table>
    </section><br><br>
    <div id="div"> </div><br><br>
    <h1> PLAN DE ESTUDIOS</h1><br>
    <a name="plan"></a>
    <center><img src="imagenes/Perfil2.png" width="80%"></center>
@endsection
@section('titulo', 'UTN')

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