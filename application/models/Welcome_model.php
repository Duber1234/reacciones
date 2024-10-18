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

    
}