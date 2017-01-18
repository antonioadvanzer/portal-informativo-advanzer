<?php

use Illuminate\Database\Seeder;
Use App\User;
use App\Circular;
use App\ImageCircular;
use App\ElementCarrusel;
use App\Birthday;
use App\BirthdayHistory;
use App\ImageBirthdayHistory;

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

        Circular::create([
            'id' => 1,
            'title' => "Nueva instalación intranet",
            'summary' => "El portal informativo Advanzer/Entuizer ha sido instalado con exito",
            'content' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
                            Lorem ipsum dolor sit amet, consectetur.Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit 
                            lobortis nisl ut aliquip ex ea commodo consequat."
        ]);

        ImageCircular::create([
            'id' => 1,
            'path' => "img/noticias/instalacion/intranet.jpg",
            'id_circular' => 1
        ]);

        ElementCarrusel::create([
            'id_circular' => 1,
            'id_img_circular' => 1
        ]);

        Birthday::create([
            'id' => 1,
            'description' => "Mural de las fechas de cumpleaños de cada colaborador",
            'path' => "birthday_cake_and_candles-wallpaper-1440x900.jpg"
        ]);

        BirthdayHistory::create([
            'id' => 1,
            'title' => "Felicidades",
            'summary' => "El portal informativo Advanzer/Entuizer ha sido instalado con exito",
            'content' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
                            Lorem ipsum dolor sit amet, consectetur.Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit 
                            lobortis nisl ut aliquip ex ea commodo consequat.",
            'date' => "2017-01-17"
        ]);

        ImageBirthdayHistory::create([
            'id' => 1,
            'path' => "img/historial de cumpleanos/felicidades/birthdays.jpg",
            'id_birthday_history' => 1
        ]);

    }
}
