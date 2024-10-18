<?php
/**
 * Neo Billing -  Accounting,  Invoicing  and CRM Software
 * Copyright (c) Rajesh Dukiya. All Rights Reserved
 * ***********************************************************************
 *
 *  Email: support@ultimatekode.com
 *  Website: https://www.ultimatekode.com
 *
 *  ************************************************************************
 *  * This software is furnished under a license and may be used and copied
 *  * only  in  accordance  with  the  terms  of such  license and with the
 *  * inclusion of the above copyright notice.
 *  * If you Purchased from Codecanyon, Please read the full License from
 *  * here- http://codecanyon.net/licenses/standard/
 * ***********************************************************************
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_model extends CI_Model
{
     
     public function get_ip() {
            if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
            {
              $ip=$_SERVER['HTTP_CLIENT_IP'];

            }
            elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //check ip from proxy
            {
              $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];

            }
            else
            {
              $ip=$_SERVER['REMOTE_ADDR'];
            }
            return $ip;
    
    }
    public function cargar(){
      $ip=$this->get_ip();
      $user=$this->db->get_where("usuarios",array("ip"=>$ip) )->row();

        if(empty($user)){
          //crear un row
          $data=array("ip"=>$ip);
          $data['fecha_ultima_coneccion']=date("Y-m-d H:i:s");
          $this->db->insert("usuarios",$data);
          $user=$this->db->get_where("usuarios",array("ip"=>$ip) )->row();
          $_SESSION['user_var']=$user;
        }else{
          $data2=array();
          $data2['fecha_ultima_coneccion']=date("Y-m-d H:i:s");
          $this->db->update("usuarios",$data2,array("id"=>$user->id));
          $_SESSION['user_var']=$user;
        }

    }
    public function get_lista_publicaciones(){
        
      return $this->db->get_where("publicacion")->result();
    }
    public function diferencia_m($fecha){
        
     // Fecha actual
// Fecha actual
$fecha_actual = new DateTime();

// Fecha X (reemplaza con la fecha que desees)
$fecha_x = new DateTime($fecha);

// Obtener la diferencia entre las dos fechas
$diferencia = $fecha_actual->diff($fecha_x);

// Convertir la diferencia a minutos
$minutos_diferencia = ($diferencia->days * 24 * 60) + ($diferencia->h * 60) + $diferencia->i;

// Mostrar la diferencia en minutos
if ($minutos_diferencia >= 1440) {
    // Más de 24 horas (1440 minutos)
    $dias = floor($minutos_diferencia / (24 * 60)); // Obtener días completos
    $horas_restantes = floor(($minutos_diferencia % (24 * 60)) / 60); // Obtener horas restantes
    $minutos_restantes = $minutos_diferencia % 60; // Obtener minutos restantes
    $texto="hace ".$dias." d".$horas_restantes." h ".$minutos_diferencia." min";
} else if($minutos_diferencia>100){
    $horas = floor($minutos_diferencia / 60); // Obtener horas completas
    $minutos_restantes = $minutos_diferencia % 60; // Obtener los minutos restantes
    $texto="hace ".$horas." h ".$minutos_diferencia." min";
}else{
    $texto="hace ".$minutos_diferencia." min";
}

      return $texto;//ss11
    }

    
}