<?php
class DBControl {
	private $conn;
	
	function __construct() 
	{ 
	$this->conn = $this->conectDB();
	}
	
	function conectDB() 
	{
		$conn = mysqli_connect("localhost","root","","chefcito");
		return $conn;
	}
	
	function platosquery($query) 
	{
		$result = mysqli_query($this->conn,$query);
		while($fila=mysqli_fetch_assoc($result)) 
		{
			$obtener_resultado[] = $fila;
		}		
		if(!empty($obtener_resultado))
		{
		return $obtener_resultado;
		}
	}
	
	function nfilas($query) {
		$result  = mysqli_query($this->conn,$query);
		$totalfilas = mysqli_num_rows($result);
		return $totalfilas;	
	}
}
?>