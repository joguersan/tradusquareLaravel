<?php

use Illuminate\Database\Seeder;
use App\Ficha;

class FichaSeeder extends Seeder {

  public function run()
  {
    Ficha::create(
      ['nombre' => '.hack//G.U. Last Recode',
      'imagen' => 'https://tradusquare.es/entradas/imagen_destacada/hackgu.jpg',
      'ficha' => '<strong>Título:</strong>&nbsp;Zero Time Dilemma<br><strong>Desarrolladora:</strong>&nbsp;Chime<br><strong>Año de lanzamiento:</strong>&nbsp;2016<br><strong>Plataforma:</strong>&nbsp;PC',
      'sinopsis' => '<p>Zero Time Dilemma se sitúa argumentalmente entre la primera y la segunda entrega de la saga. La aventura tendrá lugar en esta ocasión en 2028, casi un año entero después de 999. El día 31 de diciembre de 2028 se cumplen nueve días desde que los protagonistas comenzaron a convivir en las instalaciones de Dcom localizadas en el desierto de Nevada y de las que, por supuesto, deberán salir, no sin antes descubrir más sobre todo lo que los rodea y sobre sí mismos, y enfrentarse a dilemas morales sin una solución universalmente “correcta”... los nueve serán los participantes de una nueva edición del juego nonario donde, divididos en tres equipos de tres miembros, tendrán que matarse entre ellos para hacerse con las seis contraseñas que les permitirán escapar de allí... pero para ello deberán ser seis los que también mueran.</p>',
      'equipo' => '<strong>Romhacking:</strong>&nbsp;Sorakairi (Deep Dive Translations)<br><strong>Traducción:</strong>&nbsp;Flynn22, Retroductor, VentusFarron<br><strong>Corrección:</strong>&nbsp;VentusFarron<br><strong>Edición de gráficos:</strong>&nbsp;Nakufox, Shiryu<br><strong>Betatesting:</strong>&nbsp;-',
      'descarga' => '<a class="alert-link" href="">Traducción en proceso</a>',
	    'url' => 'hack-gu-last-recode',
	    'info_adicional' => 'La que quieras']);
  }
}
