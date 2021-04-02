<?php
require_once "model/productos.php";
require_once('helper/fpdf181/fpdf.php');
require_once('helper/helper.php');

class ProductosController{
	private $model;
    #============
    public function __CONSTRUCT(){
        $this->model = new Productos();
    }
    #============
    public function Index(){
        $this->limpiar_post();
        require_once('view/header.php');
        //contenido
        require_once('view/producto/productos.php');
        require_once('view/footer.php');
    }
    public function ConsultaCrud(){
        $data = new Productos();
        if(isset($_REQUEST['id'])){
            $id = $_REQUEST['id'];
            $data = $this->model->obtenerFila($id);
        }
        require_once('view/header.php');
        //contenido
        require_once('view/producto/productos-editar.php');
        require_once('view/footer.php');
    }
    public function GuardarCrud(){
        // echo "hola".$_REQUEST['txtId'].$_REQUEST['txtNombre'].$_REQUEST['txtPrecio'];
        $data = new Productos();
        if(isset($_REQUEST['txtId']) ){
        $data->id_productos = $_REQUEST['txtId'];
        $data->codigo = $_REQUEST['txtCodigo'];
        $data->nombre = $_REQUEST['txtNombre'];
        $data->precio = $_REQUEST['txtPrecio'];
        $data->impuesto = $_REQUEST['txtImpuesto'];
        $data->id_productos > 0 ? $this->model->actualizar($data) :$this->model->Insertar($data) ;
        }elseif($_REQUEST['txtCodigo']!="" && $_REQUEST['txtNombre']!="" && $_REQUEST['txtPrecio']!="" && $_REQUEST['txtImpuesto']!=""){
            $data->codigo = $_REQUEST['txtCodigo'];
            $data->nombre = $_REQUEST['txtNombre'];
            $data->precio = $_REQUEST['txtPrecio'];
            $data->impuesto = $_REQUEST['txtImpuesto'];
            $this->model->Insertar($data);
        }
        // $this->Index();
        header('Location: index.php');

    }
    public function EliminarCrud(){
         if(isset($_REQUEST['id'])){
            $id = $_REQUEST['id'];
            $this->model->Eliminar($id);
        }
            // header('Location: index.php');
        $this->Index();
    }
    public function limpiar_post(){
            unset($_REQUEST['txtId']);
            unset($_REQUEST['txtCodigo']);
            unset($_REQUEST['txtNombre']);
            unset($_REQUEST['txtPrecio']);
            unset($_REQUEST['txtImpuesto']);
    }

    public function showReport(){
            //echo '<script>alert("llegas")</script>';
        $titulo = 'Reporte de productos - Fecha';
        $run_filas = $this->model->Show();
        $run_colunm = array('codigo','nombre','precio','igv');

        if(is_array($run_filas)){
                //foreach($validar_filas as $fila){
                //echo $fila['id']. " - " . $fila['dni'] . " - " . $fila['usuario'] . "<br/>";}
            self::report($titulo,$run_colunm ,$run_filas);
                //$jsonDatos = json_encode($validar);
                //echo $jsonDatos;
        }else{
            echo 'No se cargo los datos correctamente';
        }
    }
    public function report($rpt_titulo,$rpt_columnas,$rpt_filas){

        $pdf = new PDF();
        $pdf->variableGlobal($rpt_titulo,$rpt_columnas);
        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetFont('Times','',9);
        //$cont=1;
        foreach($rpt_filas as $filas){
            $pdf->Cell(10,8,(isset($filas->id_productos)?$filas->id_productos:"-"),1,0,'C');
            $pdf->Cell(37,8,(isset($filas->codigo)?'P-'.$filas->codigo:"-"),1,0,'C');
            $pdf->Cell(37,8,(isset($filas->nombre)?$filas->nombre:"-"),1,0,'C');
            $pdf->Cell(37,8,'S/.'.(isset($filas->precio)?$filas->precio:"-"),1,0,'C');
            $pdf->Cell(37,8,(isset($filas->impuesto)?$filas->impuesto:"-"),1,1,'C');
            //$cont++;
        }
        // select COLUMN_NAME from INFORMATION_SCHEMA.COLUMNS where TABLE_SCHEMA = 'php2_pdo_a' and TABLE_NAME = 'personal';
        // muestra los datos de columna y no su contenido
        $pdf->Output('D',$rpt_titulo.'.pdf');
    }

}