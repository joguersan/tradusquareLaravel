@extends('layouts.layout')
@section('metaAdicional')
<link rel="stylesheet" href="css/amala.css">
<title>TraduSquare - Información. ¿Quiénes somos?</title>
<meta name="description" content="Página de información de la web, la comunidad y las normas de TraduSquare.">
@endsection
@section('contenido')
<h1 class="text-center text-primary">¿Qué es TraduSquare?</h1><br>
TraduSquare es una iniciativa que nace de la unión de varios grupos españoles de fantraducciones de videjouegos.<br>La idea detrás de esta cooperación es agrupar a los grupos españoles bajo una misma marca y dirección para que vosotros, los usuarios,
podáis encontrar en un único lugar todos los parches de traducción que vayamos recopilando para poder disfrutar de cientos de juegos que de otra manera no estarían en español.
<hr>
<h1 class="text-center text-primary">Decálogo de TraduSquare</h1>
<ul class="list-group d-flex text-left">
    <li class="list-group-item"><span class="badge badge-primary text-black badge-pill mr-3">1</span>En esta comunidad de traducciones de videojuegos se albergan proyectos no oficiales, es decir,
        proyectos que no cuentan con soporte de los respectivos desarrolladores.</li>
    <li class="list-group-item"><span class="badge badge-primary text-black badge-pill mr-3">2</span>Los parches que aquí se difunden están vinculados, en la medida de lo posible, a las páginas webs
        de sus autores originales.</li>
    <li class="list-group-item"><span class="badge badge-primary text-black badge-pill mr-3">3</span>En caso de no poder vincularlos a la página web del autor original, los parches están almacenados
        en el servidor de TraduSquare con sus debidos créditos.</li>
    <li class="list-group-item"><span class="badge badge-primary text-black badge-pill mr-3">4</span>En TraduSquare no existe forma de pagar o donar en la página por el contenido ofertado, que se
        publica sin ánimo de lucro. Lo mismo se aplica al servidor, pagado por los integrantes de la comunidad.</li>
    <li class="list-group-item"><span class="badge badge-primary text-black badge-pill mr-3">5</span>Como comunidad, no nos hacemos responsables de los métodos de financiación de cada traductor y/o
        grupo, aunque se disuada de ello dentro de la misma comunidad.</li>
    <li class="list-group-item"><span class="badge badge-primary text-black badge-pill mr-3">6</span>Como comunidad, no nos hacemos responsables de las opiniones y uso de redes sociales de cada
        traductor y/o grupo, salvo casos flagrantes en los que se vea oportuna una expulsión.</li>
    <li class="list-group-item"><span class="badge badge-primary text-black badge-pill mr-3">7</span>No se garantiza que los parches no causen desperfectos en la consola de turno en su instalación.
        Nuestro trabajo no es profesional y, en consecuencia, no se ha de esperar lo mismo en el apartado técnico.</li>
    <li class="list-group-item"><span class="badge badge-primary text-black badge-pill mr-3">8</span>No se garantiza que los proyectos actualmente expuestos en la página lleguen a su conclusión algún
        día, ya que ello depende de cada grupo y sus respectivas circunstancias.</li>
    <li class="list-group-item"><span class="badge badge-primary text-black badge-pill mr-3">9</span>No se garantiza que los proyectos actualmente expuestos en la página no se retiren algún día en
        caso de ser así solicitado por los autores originales o por la desarrolladora del juego en que se apliquen.</li>
    <li class="list-group-item"><span class="badge badge-primary text-black badge-pill mr-3">10</span>En esta comunidad se rechaza la piratería, recomendando instalar los parches en copias originales
        previamente compradas siempre que esto sea posible. Es por este motivo que no se distribuyen juegos ya parcheados o se enlace a páginas que almacenen dicho contenido.</li>
    <li class="list-group-item pl-5 bg-light"><span class="badge badge-primary text-black badge-pill mr-3">10a</span>Por ello, el grupo responsable de cada parche se guarda el derecho de proporcionar soporte o asistencia en caso de que se esté usando
        una copia no legal para aplicarlo.</li>
    <li class="list-group-item"><span class="badge badge-primary text-black badge-pill mr-3">11</span>Se añadirán más términos a esta lista en caso de que sea necesario matizar algún tema no escrito
        en los puntos anteriores.</li>
</ul>
<h2>Únete a la iniciativa/Contacta con nosotros.</h2>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <form>
            <div class="form-group">
                <label for="mail">Correo electrónico</label>
                <input type="email" class="form-control" id="mail" aria-describedby="emailHelp" placeholder="Introduce tu correo">
            </div>
            <div class="form-group">
                <label for="cuerpo">Cuerpo del mensaje</label>
                <textarea name="cuerpo" class="form-control" id="cuerpo" placeholder="Escribe aquí el mensaje."></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</div>
@endsection