<?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class Users_model extends CI_Model  
  {  
   public function insertuser($data)  
   {  
    return $this->db->insert('users', $data);  
   }  
   public function verifyemail($key)  
   {  
    $data = array('status' => 1);  
      $this->db->where('md5(email)', $key);  
      return $this->db->update('users', $data);  
   }  
  }  
