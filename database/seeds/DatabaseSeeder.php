<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
  * Seed the application's database.
  *
  * @return void
  */
  public function run()
  {

    /*$this->call([
      PlataformaSeeder::class
    ]);*/
    $this->call([
      FichaSeeder::class
    ]);
    factory(App\Plataforma::class, 1)->create();
    factory(App\User::class, 1)->create();
    factory(App\Noticia::class, 1)->create();
    factory(App\Grupo::class, 1)->create();
    factory(App\EntradaTablon::class, 1)->create();
    //factory(App\Comentario::class, 1)->create();

    // ************************* //
    // Populate the pivot tables
    // ************************* //

    // Ficha-Plataforma
    $fichas = App\Ficha::all();
    App\Plataforma::all()->each(function ($plataforma) use ($fichas) {
      $plataforma->fichas()->attach(
        $plataforma->id, [
          'ficha_id'   => $plataforma->id
        ]);
      });
    // Ficha-Noticia
    App\Noticia::all()->each(function ($noticia) use ($fichas) {
      $noticia->fichas()->attach(
        $noticia->id, [
          'ficha_id'   => $noticia->id
        ]);
      });
    // Ficha-Grupo
    App\Grupo::all()->each(function ($grupo) use ($fichas) {
      $grupo->fichas()->attach(
        $grupo->id, [
          'ficha_id'   => $grupo->id
        ]);
      });
    // User-Grupo
    $users = App\User::all();
    App\Grupo::all()->each(function ($grupo) use ($users) {
      $grupo->usuarios()->attach(
        $grupo->id, [
          'user_id'   => $grupo->id
        ]);
      });

    }
  }
