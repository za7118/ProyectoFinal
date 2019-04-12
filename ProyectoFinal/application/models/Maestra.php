<?php
class Maestra extends CI_model{

public function aviso($av,$fe){
	$data = array(
         'aviso' => $na,'fecha' => now());

 return $this->db->insert('Aviso', $data);
// $results =$db->query('Select * from alumnos', PDO::FETCH_ASSOC);
 return $results->result();
}

public function datos()
{
 $this->db->select('*');
 $this->db->where('nombre="Diana"');
 $results = $this->db->get('Maestras');
// $results =$db->query('Select * from alumnos', PDO::FETCH_ASSOC);
 return $results->result();
}

}
?>