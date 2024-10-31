<?php 
if(!defined('BASEPATH')) exit('No direct script access allowed');
require_once APPPATH . '/third_party/vendor/autoload.php';
class Geolocalizacion
{

public $pais="x";

    public function __construct()
    {
        $reader = new GeoIp2\Database\Reader('GeoLite2-City.mmdb');
        $ip =$_SERVER['REMOTE_ADDR'];
        if($ip=="::1"){
            $ip="51.15.124.38";
        }
        $record = $reader->city($ip);
        $this->pais=$record->country->name;
       // var_dump($this->pais);
        if($this->pais!="Colombia"){
          
        }

    }


    
}