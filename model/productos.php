<?php
#productos.php

class Productos{
	private $pdo;
	#==============
	public $id_productos;
	public $codigo;
	public $nombre;
	public $precio;
	public $impuesto;
	#==============
	public function __CONSTRUCT(){
		try{
			$this->pdo = Database::Iniciar();
		}catch(Exception $e){
			die($e->getMessage());
		}
	}
	#==============//se ejecuta con el controlador
	public function Show(){
		try{
			$sql = "SELECT id_productos, codigo, CONCAT(UCASE(LEFT(nombre, 1)),SUBSTRING(nombre, 2)) as nombre, precio, impuesto FROM productos";
			$carga = $this->pdo->prepare($sql);
			$carga->execute();
			return $carga->fetchAll(PDO::FETCH_OBJ);
		}catch(Exception $e){
			die($e->getMessage());
		}
	}
	public function obtenerFila($id){
		try{
			$sql = "SELECT id_productos,CONCAT('p-', codigo) as codigo, CONCAT(UCASE(LEFT(nombre, 1)),SUBSTRING(nombre, 2)) as nombre, precio, impuesto FROM productos WHERE id_productos = ?";
			$carga = $this->pdo->prepare($sql);
			$carga->execute(array($id));
			return $carga->fetch(PDO::FETCH_OBJ);
		}catch(Exception $e){
			die($e->getMessage());
		}
	}
	//recibe un array
	public function Insertar($paquete){
		try{
			$sql="INSERT INTO productos(codigo,nombre,precio,impuesto) VALUES(?,?,?,?)";
			$carga = $this->pdo->prepare($sql);
			$carga->execute(array($paquete->codigo,$paquete->nombre,$paquete->precio,$paquete->impuesto));
		}catch(Exception $e){
			die($e->getMessage());
		}
	}
	//recibe un array
	public function actualizar($paquete){
		try{
			$sql="UPDATE productos SET codigo = ?,nombre = ?, precio = ?,impuesto = ? WHERE id_productos = ? ";
			$carga = $this->pdo->prepare($sql);
			$carga->execute(array($paquete->codigo,$paquete->nombre,$paquete->precio,$paquete->impuesto,$paquete->id_productos));
		}catch(Exception $e){
			die($e->getMessage());
		}
	}
	public function Eliminar($id){
		try{
			$sql="DELETE FROM productos WHERE id_productos=?";
			$carga = $this->pdo->prepare($sql);
			$carga->execute(array($id));
		}catch(Exception $e){
			die($e->getMessage());
		}
	}
}
