<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Count;
use App\Models\Config;

class SaveDataController extends Controller
{
    public function GetData(Request $request){
        $total = Config::where("nombre","cantidad_usuarios")->firstOrFail();
        $cuantosVanMo = Count::all();
        $cuantosVan = 0;
        foreach($cuantosVanMo as $count){
            $cuantosVan++;
        }
        $totalContador = round(($cuantosVan * 100)/$total->valor,0,PHP_ROUND_HALF_UP);
        if($totalContador > 100){
            $totalContador = 100;
        }
        $responseData = array(
            "name"=>"porcentaje",
            "value"=>$totalContador,
            "count"=>$cuantosVan
        );
        return $responseData;
    }

    public function SaveData(Request $request, $password){
        $configuration = Config::where("nombre","palabraSecreta")->firstOrFail();
        if($password != $configuration->valor){
            $response = array(
                "status"=>"Te pille"
            );
            return response($response, 500);
        }
        $count = new Count();
        $count->save();
        $response = array(
            "status"=>"Ok"
        );
        return $response;
    }

    public function GetConf(Request $request, $name){
        $configuration = Config::where("nombre",$name)->firstOrFail();
        return $configuration;
    }
}
