<?php 
class Sistema extends CI_controller{
	//Función encargada de mostrar el Login para acceder al sistema
	public function index()
	{
      $this->load->view('login');
	}

	public function padre(){
	$this->load->model('Alumno');
$data=array('datos'=>$this->Alumno->datos());
    $this->load->view('padres/headerpapas');
	$this->load->view('padres/datosalumno',$data);
	$this->load->view('padres/indexpadres');
	$this->load->view('padres/footer');
	}


	public function maestra(){
		$this->load->model('Alumno');
$data=array('datos'=>$this->Alumno->datos());
    $this->load->view('Maestras/headermaestras');
	$this->load->view('Maestras/datosmaestra',$data);
	$this->load->view('Maestras/indexmaestras');
	$this->load->view('Maestras/footer');
	}
	
	public function Nuevoalumno(){
		$this->load->model('Alumno');
$data=array('datos'=>$this->Alumno->datos());
    $this->load->view('Maestras/headermaestras');
	$this->load->view('Maestras/datosmaestra',$data);
	$this->load->view('Maestras/Agregaralumno');
	$this->load->view('Maestras/footer');
	}

	public function Modificaralumno(){
	$this->load->model('Alumno');
$data=array('datos'=>$this->Alumno->datos());
    $this->load->view('Maestras/headermaestras');
	$this->load->view('Maestras/datosmaestra',$data);
	$this->load->view('Maestras/modificaralumno');
	$this->load->view('Maestras/footer');
	}
	public function Bajaalumno(){
	$this->load->model('Alumno');
$data=array('datos'=>$this->Alumno->datos());
    $this->load->view('Maestras/headermaestras');
	$this->load->view('Maestras/datosmaestra',$data);
	$this->load->view('Maestras/Bajaalumno');
	$this->load->view('Maestras/footer');
	}
	
public function Subircalificaciones(){
	$this->load->model('Alumno');
$data=array('datos'=>$this->Alumno->datos());
    $this->load->view('Maestras/headermaestras');
	$this->load->view('Maestras/datosmaestra',$data);
	  $this->load->view('Maestras/calificaciones');
	$this->load->view('Maestras/footer');
	}

public function Subiravisos(){
	$this->load->model('Alumno');
$data=array('datos'=>$this->Alumno->datos());
    $this->load->view('Maestras/headermaestras');
	$this->load->view('Maestras/datosmaestra',$data);
	 $this->load->view('Maestras/avisos');
	$this->load->view('Maestras/footer');   
	}

public function avisos(){
	$this->load->model('Alumno');
$data=array('datos'=>$this->Alumno->datos());
		$this->load->model('Alumno');
	$this->load->view('padres/headerpapas');
	$this->load->view('padres/datosalumno',$data);
	 if(	$this->Alumno->aviso())
   	{
$data=array('datos'=>$this->Alumno->aviso();
	 $this->load->view('padres/avisos',);
	}
	$this->load->view('padres/footer');
	}

	public function calificaciones(){
		$this->load->model('Alumno');
$data=array('datos'=>$this->Alumno->datos());
	$this->load->view('padres/headerpapas');
	$this->load->view('padres/datosalumno');
	$this->load->view('padres/calificaciones',$data);
	$this->load->view('padres/footer');	
	}

	public function cuenta(){
    $this->load->view('cuenta');
	}
	public function recuperar(){
    $this->load->view('recuperar');
	}

public function iniciar()
	{
   	$u=$this->input->post('us');
	$p=$this->input->post('pas');
	$this->load->model('login');

 if($this->login->consulta($u,$p)){
	header("Location:https://sgestor.000webhostapp.com/padre");
	}
	else
	{
	if($this->login->consultam($u,$p)){	
    header("Location:https://sgestor.000webhostapp.com/maestra");
	}
	else{
	$this->load->view('login');
	}
}
}

public function insertaral()
	{
   	$na=$this->input->post('nombreal');
	$ap=$this->input->post('apellidoal');
	$fn=$this->input->post('fechan');
	$cu=$this->input->post('curp');
	$nt=$this->input->post('nombret');
	$apt=$this->input->post('apellidost');
	$te=$this->input->post('tel');
	$par=$this->input->post('paren');
	$dire=$this->input->post('direc');
	$ci=$this->input->post('ciudad');
	$es=$this->input->post('estado');
	$cp=$this->input->post('cp');
	$this->load->model('Alumno');

	
	if($this->Alumno->nuevo($na,$ap,$fn,$cu,$nt,$apt,$te,$par,$dire,$ci,$es,$cp)){
		header("Location:https://sgestor.000webhostapp.com/maestra");
	}
}

public function buscaral()
	{
   	$na=$this->input->post('nombreal');
   	$this->load->model('Alumno');
   
   	if(	$this->Alumno->buscaralu($na))
   	{
$data=array('datos'=>$this->Alumno->buscar($na);
   	$this->load->view('Maestras/datosmaestra');
	$this->load->view('Maestras/informacionalumno',$data);
	$this->load->view('Maestras/footer');
   	}
}


public function eliminaral()
	{
   	$na=$this->input->post('nombreal');
   	$this->load->model('Alumno');
   
   	if(	$this->Alumno->eliminar($na))
   	{
   	header("Location:https://sgestor.000webhostapp.com/Sistema/Bajaalumno"); 
   	}
}


public function actualizaral()
	{
  $na=$this->input->post('nombreal');
	$ap=$this->input->post('apellidoal');
	$fn=$this->input->post('fechan');
	$cu=$this->input->post('curp');
	$nt=$this->input->post('nombret');
	$apt=$this->input->post('apellidost');
	$te=$this->input->post('tel');
	$par=$this->input->post('paren');
	$dire=$this->input->post('direc');
	$ci=$this->input->post('ciudad');
	$es=$this->input->post('estado');
	$cp=$this->input->post('cp');
	$this->load->model('Alumno');

	
	if($this->Alumno->actualizar($na,$ap,$fn,$cu,$nt,$apt,$te,$par,$dire,$ci,$es,$cp)){
		header("Location:https://sgestor.000webhostapp.com/sistema/Modificaralumno");
	}
}


public function nuevoaviso(){
	$a=$this->input->post('avi');
	$this->load->model('Aviso');
	if($this->Maestra->aviso($a)){
		header("Location:https://sgestor.000webhostapp.com/sistema/Subiravisos");
	}
}



}
?>