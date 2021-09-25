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
        $UrlCinematicaFinal->valor = "https://museocarmona.com/img/info/notasyvideos/videos/one.mp4";
        $UrlCinematicaFinal->save();

        $UrlCinematicaFinalAlter = new Config;
        $UrlCinematicaFinalAlter->nombre = "url_cinematica_final_alter";
        $UrlCinematicaFinalAlter->valor = "https://museocarmona.com/img/info/notasyvideos/videos/one.mp4";
        $UrlCinematicaFinalAlter->save();
        
        $UrlCinematicaInicial = new Config;
        $UrlCinematicaInicial->nombre = "url_cinematica_inicial";
        $UrlCinematicaInicial->valor = "https://museocarmona.com/img/info/notasyvideos/videos/one.mp4";
        $UrlCinematicaInicial->save();

        $palabraSecreta = new Config;
        $palabraSecreta->nombre = "palabraSecreta";
        $palabraSecreta->valor = "HachiTienePantallaCuadrada";
        $palabraSecreta->save();
    }
}
