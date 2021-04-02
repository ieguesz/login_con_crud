<?php
# login.php
// Crea la clase con los datos de la clase
class login{
	private $pdo;

	public $Id;
	public $Login;
	public $nombre;
	public $Contraseña;

	public function __CONSTRUCT(){
		try{
			$this->pdo = Database::Iniciar();
		}catch(Exception $e){
			die($e->getMessage());
		}
	}
	public function Logeo($Login){
		try{
			$sql = "SELECT * FROM usuarios WHERE login = ?";
			$carga = $this->pdo->prepare($sql);
			$carga->execute(array($Login));
			return $carga->fetch(PDO::FETCH_OBJ);
		}catch(Exception $e){
			die($e->getMessage());
		}
	}
}

