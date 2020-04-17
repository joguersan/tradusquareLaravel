<?php

use Illuminate\Database\Seeder;
use App\Plataforma;

class PlataformaSeeder extends Seeder {
    public function run()
    {
        Plataforma::create(
          ['nombre' => 'NES',
          'imagen' => 'https://tradusquare.es/images/icons/NES.png']
        );
        Plataforma::create(
          ['nombre' => 'PC',
          'imagen' => 'https://tradusquare.es/images/icons/PC.png']
        );
        Plataforma::create(
          ['nombre' => 'XBOX',
          'imagen' => 'https://tradusquare.es/images/icons/Xbox.png']
        );
        Plataforma::create(
          ['nombre' => 'PSVITA',
          'imagen' => 'https://tradusquare.es/images/icons/Playstation-Vita.png']
        );
		Plataforma::create(
          ['nombre' => 'Playstation 4',
          'imagen' => 'https://tradusquare.es/images/icons/Playstation-4.png']
        );
		Plataforma::create(
          ['nombre' => 'Nintendo 3DS',
          'imagen' => 'https://tradusquare.es/images/icons/Nintendo-3DS.png']
        );
    }
}
