@extends('layouts.layout')
@section('metaAdicional')
  <link rel="stylesheet" href="css/amala.css">
  <title>Proyecto Amala</title>
  <meta name="description" content="  El Proyecto Amala es una iniciativa que nace en TraduSquare en 2017, cuando varios equipos de fantraducciones de videojuegos al español decidieron colaborar por un fin común: la traducción de la mayor cantidad posible de los juegos de la saga
    «Megami Tensei».">
@endsection
@section('contenido')
  <h1>Megami Tensei</h1>
  <p>La saga Megami Tensei es, sin duda alguna, una de las precursoras del RPG japonés. En contraste con otras muchas series que iniciaron este género, nos encontramos con un mundo desolado por demonios en el que un héroe, elegido por el destino,
      emprende una aventura en busca de venganza. <br>Si os gustan la antropología o la mitología, estáis de suerte, porque esta saga rebosa de historias que tratan sobre el origen de la humanidad, sus mitos y leyendas, e incluye un montón de detalles
      que harán las delicias de los jugadores que busquen este tipo de contenido en un videojuego. Por otra parte, hay juegos como Persona 4 o 5 que han tenido un gran éxito en el mercado y vienen de aquí, por lo que si os interesa saber cómo empezó
      todo, este es el lugar perfecto para adentraros más a fondo en esta saga tan icónica.</p>
  <h1>El Proyecto Amala</h1>
  <p>
      El Proyecto Amala es una iniciativa que nace en TraduSquare en 2017, cuando varios equipos de fantraducciones de videojuegos al español decidieron colaborar por un fin común: la traducción de la mayor cantidad posible de los juegos de la saga
      «Megami Tensei». Estamos ante un proyecto que nació con bastante ambición y que, con el tiempo, ha ido creciendo en popularidad y actividad, hasta resultar en la tabla que actualmente mostramos más abajo.<br>
      ¿En qué nos hemos basado para llegar al listado que tenemos hoy? Para entenderlo, es necesario desglosar Megami Tensei en varias series principales, que son las siguientes:<br>
  <ul>
      <li>Shin Megami Tensei</li>
      <li>Shin Megami Tensei: Persona</li>
      <li>Shin Megami Tensei: Devil Summoner</li>
      <li>Shin Megami Tensei: Devil Survivor</li>
      <li>Shin Megami Tensei: Digital Devil Saga</li>
      <li>Megami Tensei Gaiden: Last Bible</li>
  </ul>
  <p>
  Consideramos que estas son las series principales que componen esta saga tan icónica, aunque no es un listado exhaustivo por los recursos de los que disponemos actualmente (faltarían, por ejemplo, las series Devil Children, Majin Tensei o spinoffs
  como Tokyo Mirage Sessions). Aun así, esperamos ir completando estos proyectos con los años y pavimentando el camino para futuras generaciones de fantraductores, con recursos como herramientas o glosarios.
  </p>
  <p>
      A continuación mostramos una lista de los proyectos en proceso, completados y planeados para futuro. Las imágenes a color son los proyectos en proceso, y si los pulsáis, os llevará a la ficha del proyecto con todos sus avances. De momento, el
      estado actual es el siguiente, con 22 proyectos en la lista:</p>
  <ul>
      <li>Completados: 5 (23%)</li>
      <li>En proceso: 5 (23%)</li>
      <li>Planeados: 12 (54%)</li>
  </ul>
  <hr>
  <div class="row p-3 mt-1">
      <a href="{{route('fichas.show', 'shin-megami-tensei')}}" class="col-md-6 objeto" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.25), rgba(245, 236, 255, 0.20)), url('images/amala/SMT1.jpg')">
          <span class="titulo">Shin Megami Tensei</span>
          <br /><span class="descripcion">Traducido por Orden</span>
      </a>
      <a href="{{route('fichas.show', 'shin-megami-tensei-ii')}}" class="col-md-6 objeto" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.25), rgba(245, 236, 255, 0.20)),
    							 url('images/amala/SMT2.jpg')">
          <span class="titulo">Shin Megami Tensei II</span>
          <br /><span class="descripcion">Traducido por Orden</span>
      </a>
      <a href="#" class="col-md-6 objeto noTraducido" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.25), rgba(245, 236, 255, 0.20)),
    							 url('images/amala/SMT3.jpg')">
          <span class="titulo">Shin Megami Tensei Nocturne</span>
          <br /><span class="descripcion">Sin traducir</span>
      </a>
      <a href="{{route('fichas.show', 'shin-megami-tensei-iv')}}" class="col-md-6 objeto" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.25), rgba(245, 236, 255, 0.20)),
    							 url('images/amala/SMT4.jpg')">
          <span class="titulo">Shin Megami Tensei IV</span>
          <br /><span class="descripcion">En proceso por TraduSquare</span>
      </a>
      <a href="#" class="col-md-6 objeto noTraducido" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.25), rgba(245, 236, 255, 0.20)), url('images/amala/SMT4f.jpg')">
          <span class="titulo">Shin Megami Tensei IV Apocalypse</span>
          <br /><span class="descripcion">Sin traducir</span>
      </a>
      <a href="#" class="col-md-6 objeto noTraducido" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.25), rgba(245, 236, 255, 0.20)), url('images/amala/SMT_DSR.jpg')">
          <span class="titulo">Shin Megami Tensei Devil Summoner Raidou</span>
          <br /><span class="descripcion">Sin traducir</span>
      </a>
      <a href="#" class="col-md-6 objeto noTraducido" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.25), rgba(245, 236, 255, 0.20)),
    							 url('images/amala/SMT_DSR2.jpg')">
          <span class="titulo">Shin Megami Tensei Devil Summoner Raidou II</span>
          <br /><span class="descripcion">Sin traducir</span>
      </a>
      <a href="{{route('fichas.show', 'smt-soul-hackers')}}" class="col-md-6 objeto" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.25), rgba(245, 236, 255, 0.20)),
    							 url('images/amala/SMT_SH.jpg')">
          <span class="titulo">Shin Megami Tensei Devil Summoner Soul Hackers</span>
          <br /><span class="descripcion">En proceso por TraduSquare</span>
      </a>
      <a href="{{route('fichas.show', 'smt-devil-survivor')}}" class="col-md-6 objeto" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.25), rgba(245, 236, 255, 0.20)),
    							 url('images/amala/SMT_DSUR.jpg')">
          <span class="titulo">Shin Megami Tensei Devil Survivor</span>
          <br /><span class="descripcion">En proceso por Neku Translations</span>
      </a>
      <a href="{{route('fichas.show', 'smt-devil-survivor-2')}}" class="col-md-6 objeto" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.25), rgba(245, 236, 255, 0.20)),
    							 url('images/amala/SMT_DSUR2.jpg')">
          <span class="titulo">Shin Megami Tensei Devil Survivor 2</span>
          <br /><span class="descripcion">Traducido por Artema Translations</span>
      </a>
      <div class="col-md-6 objeto noTraducido" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.25), rgba(245, 236, 255, 0.20)),
    							 url('images/amala/SMT_SJ.jpg')">
          <span class="titulo">Shin Megami Tensei Deep Strange Journey</span>
          <br /><span class="descripcion">Sin traducir</span>
      </div>
      <div class="col-md-6 objeto noTraducido" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.25), rgba(245, 236, 255, 0.20)),
    							 url('images/amala/SMT_DDS.jpg')">
          <span class="titulo">Shin Megami Tensei Digital Devil Saga</span>
          <br /><span class="descripcion">Sin traducir</span>
      </div>
      <div class="col-md-6 objeto noTraducido" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.25), rgba(245, 236, 255, 0.20)),
    							 url('images/amala/SMT_DDS2.jpg')">
          <span class="titulo">Shin Megami Tensei Digital Devil Saga II</span>
          <br /><span class="descripcion">Sin traducir</span>
      </div>
      <div class="col-md-6 objeto noTraducido" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.25), rgba(245, 236, 255, 0.20)),
    							 url('images/amala/SMTif.jpg')">
          <span class="titulo">Shin Megami Tensei If...</span>
          <br /><span class="descripcion">Sin traducir</span>
      </div>
      <div class="col-md-6 objeto noTraducido" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.25), rgba(245, 236, 255, 0.20)),
    							 url('images/amala/SMT_PERSONA.jpg')">
          <span class="titulo">Shin Megami Tensei: Persona</span>
          <br /><span class="descripcion">Sin traducir</span>
      </div>
      <div class="col-md-6 objeto noTraducido" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.25), rgba(245, 236, 255, 0.20)),
    							 url('images/amala/SMT_PERSONA2_IS.jpg')">
          <span class="titulo">Shin Megami Tensei: Persona 2 Innocent Sin</span>
          <br /><span class="descripcion">Sin traducir</span>
      </div>
      <div class="col-md-6 objeto noTraducido" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.25), rgba(245, 236, 255, 0.20)),
    							 url('images/amala/SMT_PERSONA2_EP.jpg')">
          <span class="titulo">Shin Megami Tensei: Persona 2 Eternal Punishment</span>
          <br /><span class="descripcion">Sin traducir</span>
      </div>
      <a href="{{route('fichas.show', 'persona-3-fes')}}" class="col-md-6 objeto" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.25), rgba(245, 236, 255, 0.20)),
    							 url('images/amala/SMT_PERSONA3.jpg')">
          <span class="titulo">Shin Megami Tensei: Persona 3 FES</span>
          <br /><span class="descripcion">En proceso por Traducciones del Tío Víctor</span>
      </a>
      <a href="{{route('fichas.show', 'persona-4')}}" class="col-md-6 objeto" style="background-image:linear-gradient(to bottom, rgba(0, 0, 0, 0.25), rgba(245, 236, 255, 0.20)),url('images/amala/SMT_PERSONA4.jpg')">
          <span class="titulo">Shin Megami Tensei: Persona 4</span>
          <br /><span class="descripcion">En proceso por GlowTranslations</span>
      </a>
      <a href="{{route('fichas.show', 'last-bible-1')}}" class="col-md-6 objeto" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.25), rgba(245, 236, 255, 0.20)),
    							 url('images/amala/MT_LB.jpg')">
          <span class="titulo">Megami Tensei Gaiden: Last Bible</span>
          <br /><span class="descripcion">Traducido por GlowTranslations</span>
      </a>
      <div class="col-md-6 objeto noTraducido" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.25), rgba(245, 236, 255, 0.20)),
    							 url('images/amala/MT_LB2.jpg')">
          <span class="titulo">Megami Tensei Gaiden: Last Bible II</span>
          <br /><span class="descripcion">Sin traducir</span>
      </div>
      <a href="{{route('fichas.show', 'last-bible-3')}}" class="col-md-6 objeto" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.25), rgba(245, 236, 255, 0.20)),
    							 url('images/amala/MT_LB3.jpg')">
          <span class="titulo">Megami Tensei Gaiden: Last Bible III</span>
          <br /><span class="descripcion">Traducido por Semco</span>
      </a>
  </div>
@endsection
