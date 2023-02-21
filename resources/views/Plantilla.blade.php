<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/index.css">
    <title>@yield('titulo','Universidad')</title>

</head>
<body>
		<!-- ======= Header ======= -->
    <header id="header">
        <img src="imagenes/LogoTIC.png"  width="150" height="100" >
        @yield('menu')
    </header>

    <section>
        @yield('contenido')
    </section>

    <!-- ======= SECCION FOOTER ======= -->
    <footer>
            <img src="imagenes/UTN.png" width="100" height="80"><br>
            <strong>Domicilio:</strong> Carretera Federal 200 Km. 9 <br>
            <strong>Ciudad:</strong> Xalisco, Nayarit <br>
            <strong>Telefóno:</strong> 311 211 98 00 <br>
            <a class="ancla" href="#ancla">Ir al Inicio</a>
    </footer>
</body>
</html>