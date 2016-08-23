<?php

use Illuminate\Database\Seeder;
Use App\User;
use App\Circular;
use App\ImageCircular;
use App\ElementCarrusel;

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
            'title' => "Nueva installación intranet",
            'summary' => "El portal informativo Advanzer/Entuizer ha sido instalado con exito",
            'content' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
                            Lorem ipsum dolor sit amet, consectetur.Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit 
                            lobortis nisl ut aliquip ex ea commodo consequat."
        ]);

        ImageCircular::create([
            'id' => 1,
            'path' => "intranet.jpg",
            'id_circular' => 1
        ]);

        ElementCarrusel::create([
            'id_circular' => 1,
            'id_img_circular' => 1
        ]);
    }
}
