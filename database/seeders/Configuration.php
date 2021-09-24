<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Config;

class Configuration extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $cantidadMaximaDeUsuarios = new Config;
        $cantidadMaximaDeUsuarios->nombre = "cantidad_usuarios";
        $cantidadMaximaDeUsuarios->valor = "100";
        $cantidadMaximaDeUsuarios->save();

        $UrlCinematicaFinal = new Config;
        $UrlCinematicaFinal->nombre = "url_cinematica_final";
        $UrlCinematicaFinal->valor = "https://www.youtube.com/watch?v=jxtkZCg2Zsc";
        $UrlCinematicaFinal->save();
        
        $UrlCinematicaInicial = new Config;
        $UrlCinematicaInicial->nombre = "url_cinematica_inicial";
        $UrlCinematicaInicial->valor = "https://www.youtube.com/watch?v=4HpC--2iowE&t=947s";
        $UrlCinematicaInicial->save();

        $palabraSecreta = new Config;
        $palabraSecreta->nombre = "palabraSecreta";
        $palabraSecreta->valor = "HachiTienePantallaCuadrada";
        $palabraSecreta->save();
    }
}
