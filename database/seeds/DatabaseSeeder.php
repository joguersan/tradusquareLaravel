<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

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

    factory(App\Ficha::class, 30)->create();
    factory(App\Plataforma::class, 10)->create();
    factory(App\User::class, 10)->create();
    factory(App\Noticia::class, 10)->create();
    factory(App\Grupo::class, 10)->create();
    factory(App\EntradaTablon::class, 10)->create();
    //factory(App\Comentario::class, 1)->create();
    //usaurio para pruebas
    $user = new User();
    $user->nombre                     =   'gerard';
    $user->email                    =   'gerard@gerard.com';
    $user->imagen                    =  'e.png';
    $user->password                 =   Hash::make('12345678');
    $user->rol                         =  0;
    $user->save();

    // ************************* //
    // Populate the pivot tables
    // ************************* //
      $fichas = App\Ficha::all();
    // Ficha-Plataforma (Falta Modelo y Factory para Estado)
    /*

    App\Plataforma::all()->each(function ($plataforma) use ($fichas) {
      $plataforma->fichas()->attach(
        $plataforma->id, [
          'plataforma_id'   => $plataforma->id,
        ]);
      });
    */

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
