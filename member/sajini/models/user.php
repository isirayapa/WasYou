<?php
Class User extends CI_Model
{
 function login($email, $password)
 {
   $this -> db -> select('email, password');
   $this -> db -> from('customer');
   $this -> db -> where('email', $email);
   $this -> db -> where('password', md5($password));
   $this -> db -> limit(1);
 
   $query = $this -> db -> get();
 
   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
 function reg(){
    $data = array(
      'name' => $this -> input ->post('name'),
      'address' => $this -> input ->post('address'),
      'district' => $this -> input ->post('district'),
      'contact_no' => $this -> input ->post('contact_no'),
      'email' => $this -> input ->post('email'),
      'password' => md5($this -> input ->post('password'))
            
            );
    $insert = $this -> db -> insert('customer', $data);
    return $insert;
 }

 function updateprofile($username){
    
    $data = array(
      'name' => $this -> input ->post('name'),
      'address' => $this -> input ->post('address'),
      'district' => $this -> input ->post('district'),
      'contact_no' => $this -> input ->post('contact_no'),
        'imgurl' => $this -> input ->post('imgurl'),
      'password' => md5($this -> input ->post('password'))

    );

    $this-> db ->where('email', $username);
    $this-> db ->update('customer', $data);

    
 }
 function getOne($username){
    $query=$this->db->query("SELECT * FROM customer WHERE email = '$username'");
    return $query->result();
}
 


}
?>