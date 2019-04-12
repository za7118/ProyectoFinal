<?php
class login extends CI_model{

public function consulta($us,$pa){
 $this->db->select('*');
 $this->db->where('usuario="'.$us.'"');
 $this->db->where('contraseña="'.$pa.'"');
 $this->db->where('tipoUsuario="3"');
 $results = $this->db->get('login');
// $results =$db->query('Select * from alumnos', PDO::FETCH_ASSOC);
 return $results->result();
}

public function consultam($us,$pa){
 $this->db->select('*');
 $this->db->where('usuario="'.$us.'"');
 $this->db->where('contraseña="'.$pa.'"');
 $this->db->where('tipo="Mestro"');
 $results = $this->db->get('login');
// $results =$db->query('Select * from alumnos', PDO::FETCH_ASSOC);
 return $results->result();
}



}
?>