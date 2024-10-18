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
        
      return $this->db->query("select * from publicacion order by id desc")->result_array();
    }
    public function diferencia_m($fecha){
        
 // Fecha actual
$fecha_actual = new DateTime();

// Fecha X (reemplaza con la fecha que desees)
$fecha_x = new DateTime($fecha);

// Obtener la diferencia entre las dos fechas
$diferencia = $fecha_x->diff($fecha_actual);

// Extraer los días, horas y minutos
$dias = $diferencia->days;
$horas = $diferencia->h;
$minutos = $diferencia->i;
$texto="";
// Mostrar la diferencia en el formato adecuado
if ($dias > 0) {
    // Si han pasado más de 1 día
    $texto= "Hace $dias días con $horas horas y $minutos minutos.";
} elseif ($horas > 0) {
    // Si han pasado más de 1 hora pero menos de 1 día
    $texto= "Hace $horas horas con $minutos minutos.";
} else {
    // Si han pasado menos de 1 hora
    $texto= "Ahora";
}
return $texto;
    }
public function get_user_name($id){
      $user=$this->db->get_where("usuarios",array("id"=>$id))->row();
       $texto="";
      if($user->nombre==null){
          $texto="Usuario #".$id;
      }else{
          $texto=$user->nombre;
      }
     
      return $texto;
    }
    function convertir_a_embed($url) {
    // Verifica si la URL contiene un ID de video de YouTube
    if (preg_match('/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/i', $url, $matches)) {
        // Extraer el ID del video
        $video_id = $matches[1];
        // Generar la URL del embed
        return "https://www.youtube.com/embed/" . $video_id;
    } else {
        return false; // Si no es una URL válida de YouTube
    }
}
}