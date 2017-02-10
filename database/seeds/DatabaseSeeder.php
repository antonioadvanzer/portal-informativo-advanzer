<?php

use Illuminate\Database\Seeder;
Use App\User;
use App\Circular;
use App\ImageCircular;
use App\ElementCarrusel;
use App\Birthday;
use App\LinkCircular;
use App\TypeCircular;
/*use App\BirthdayHistory;
use App\ImageBirthdayHistory;
use App\EventHistory;
use App\ImageEventHistory;*/

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        User::create([
            'name' => "admin",
            'email' => "notificaciones.ch@advanzer.com",
            'password' => Hash::make("admin"),
        ]);

        TypeCircular::create([
            'id' => 1,
            'name' => "Noticia",
            'description' => "Noticias relevantes para la compañia" 
        ]);

        TypeCircular::create([
            'id' => 2,
            'name' => "Album de Cumpleaños",
            'description' => "Historial de los cumpleañeros de cada mes" 
        ]);

        TypeCircular::create([
            'id' => 3,
            'name' => "Evento",
            'description' => "Historial de los eventos internos de la empresa" 
        ]);

        Circular::create([
            'id' => 1,
            'title' => "Nueva instalación intranet",
            'summary' => "El portal informativo Advanzer/Entuizer ha sido instalado con exito",
            'content' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
                            Lorem ipsum dolor sit amet, consectetur.Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit 
                            lobortis nisl ut aliquip ex ea commodo consequat.",
            'date' => "2017-01-17",
            'type' => 1 
        ]);

        ImageCircular::create([
            'id' => 1,
            'path' => "img/noticias/instalacion/intranet.jpg",
            'id_circular' => 1
        ]);

        Circular::create([
            'id' => 2,
            'title' => "Felicidades",
            'summary' => "El portal informativo Advanzer/Entuizer ha sido instalado con exito",
            'content' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
                            Lorem ipsum dolor sit amet, consectetur.Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit 
                            lobortis nisl ut aliquip ex ea commodo consequat.",
            'date' => "2017-01-17",
            'type' => 2 
        ]);

        ImageCircular::create([
            'id' => 2,
            'path' => "img/historial de cumpleanos/felicidades/birthdays.jpg",
            'id_circular' => 2
        ]);

        Circular::create([
            'id' => 3,
            'title' => "Evento",
            'summary' => "El portal informativo Advanzer/Entuizer ha sido instalado con exito",
            'content' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
                            Lorem ipsum dolor sit amet, consectetur.Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit 
                            lobortis nisl ut aliquip ex ea commodo consequat.",
            'date' => "2017-01-17",
            'type' => 3
        ]);

        ImageCircular::create([
            'id' => 3,
            'path' => "img/historial de eventos/evento/networking-events-uae.jpg",
            'id_circular' => 3
        ]);

        ElementCarrusel::create([
            'id_circular' => 1,
            'id_img_circular' => 1
        ]);

        ElementCarrusel::create([
            'id_circular' => 2,
            'id_img_circular' => 2
        ]);

        ElementCarrusel::create([
            'id_circular' => 3,
            'id_img_circular' => 3
        ]);

        Birthday::create([
            'id' => 1,
            'description' => "Mural de las fechas de cumpleaños de cada colaborador",
            'path' => "birthday_cake_and_candles-wallpaper-1440x900.jpg"
        ]);

    }
}
