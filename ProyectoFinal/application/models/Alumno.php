<?php
class Alumno extends CI_model{

public function nuevo($na,$ap,$fen,$curp,$Nt,$ape,$tel,$pare,$dire,$ciudad,$est,$cp){
	$data = array(
         'nombre' => $na,'apellidoP' => $ap,
         'fechaNac' =>$fec,'curp'=>$curp,'nombreTutor'=>$Nt,'apellidosTutor'=>$ape,'telefono'=>$tel,'parenetsco'=>$pare,'direccion'=>$dire,'ciudad'=>$ciudad,'estado'=>$est,'codigoPostal'=>$cp);

 return $this->db->insert('Alumno', $data);
// $results =$db->query('Select * from alumnos', PDO::FETCH_ASSOC);
 return $results->result();
}

public function eliminar($nombre)
{
 $results =$this->db->delete('Alumnos', array('nombre' => $nombre);
// $results =$db->query('Select * from alumnos', PDO::FETCH_ASSOC);
 return $results->result();
}

public function buscar($nombre)
{
 $this->db->select('*');
 $this->db->where('nombre="'.$nombre.'"');
 $results = $this->db->get('Alumno');
// $results =$db->query('Select * from alumnos', PDO::FETCH_ASSOC);
 return $results->result();
}

public function actualizar($na,$ap,$fen,$curp,$Nt,$ape,$tel,$pare,$dire,$ciudad,$est,$cp){
	$data = array(
         'nombre' => $na,'apellidoP' => $ap,
         'fechaNac' =>$fec,'curp'=>$curp,'nombreTutor'=>$Nt,'apellidosTutor'=>$ape,'telefono'=>$tel,'parenetsco'=>$pare,'direccion'=>$dire,'ciudad'=>$ciudad,'estado'=>$est,'codigoPostal'=>$cp);
$this->db->where('nombre',$na);
$this->db->set($data);
return $this->db->update('Alumno');
}

public function aviso()
{
 $this->db->select('*');
 $results = $this->db->get('Avisos');
// $results =$db->query('Select * from alumnos', PDO::FETCH_ASSOC);
 return $results->result();
}

public function datos()
{
 $this->db->select('*');
 $this->db->where('nombre="zahid"');
 $results = $this->db->get('Alumno');
// $results =$db->query('Select * from alumnos', PDO::FETCH_ASSOC);
 return $results->result();
}


}

?>