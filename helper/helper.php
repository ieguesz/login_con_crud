<?php 
require_once('fpdf181/fpdf.php');

class PDF extends FPDF{
	private $titulo;
	private $columas = array();
	private $fecha ;
	function variableGlobal($tit,$col){
		$this->titulo = $tit;
		$this->columas = $col;
		$this->fecha = date('d/m/y'); 
	}
	function Header(){
	    //$this->Image('histo.php',10,8,10);
	    $this->SetFont('Times','B',14);
	    $this->Cell(0,10,$this->titulo.' '.$this->fecha,'TB',0,'C');
	    //$this->Line(10,30,200,30);
	    $this->Ln(20);
	    $this->SetFillColor(0, 191, 255);
	    $this->Cell(10,8,'ID',1,0,'C',true);

	    $longitud = count($this->columas);
		//Recorro todos los elementos
		for($i=0; $i<$longitud; $i++){
			$this->SetFillColor(0, 191, 255);
			$this->Cell(37,8,ucfirst($this->columas[$i]),1,0,'C',true);
			}
		$this->Cell(25,8,'',0,1);	//salto linea
		//$this->Cell(25,8,'Dni',1,0);
		//$this->Cell(25,8,'Usuario',1,1);
	}

	function Footer(){
	    $this->SetY(-15);
	    $this->SetFont('Times','I',8);
	    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
	}
}
 ?>
