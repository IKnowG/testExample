<?php


function StrtoGeo($data){

    $data = preg_replace('/ /', '', $data);

    $key = "bf05331b5f2147539ff18ffc9c7ca9e3";

    $json = file_get_contents("https://api.opencagedata.com/geocode/v1/json?q=".$data."&key=".$key."");

    $temp = json_decode($json);

    return $temp->results[0]->geometry;

}

function geocoding($data){

    $result = StrtoGeo($data);

    $lat = $result->lat;
    $long = $result->lng;    
    $json = file_get_contents("https://api.met.no/weatherapi/locationforecast/1.9/.json?lat=".$lat."&lon=".$long."");

    $obj = json_decode($json);

    $rez = $obj->product->time[0]->location;
    
    return $rez;

}

function visibility($prectage) 
{ 
    
    if($prectage<=20) return 0;
    else if($prectage<=50) return 0.5;
    else return 1;
    
}