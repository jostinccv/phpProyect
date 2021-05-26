<?php 

$base = new PDO('sqlite:final.db');

if($_POST){
$Nombre=$_POST['Nombre'];
$Apellido =$_POST['Apellido'];
$Telefono=$_POST['Telefono'];
$Correo=$_POST['Correo'];
$Ciudad=$_POST['Ciudad'];
$Fecha=$_POST['Fecha'];
$Producto=$_POST['Producto'];
$Descripcion=$_POST['Descripcion'];
$Cantidad=$_POST['Cantidad'];
$Subtotal = $_POST['Subtotal'];
$Itebis = '18%';
$itibis = ($Subtotal*0.18);
$Total = ($Cantidad*$Subtotal)+$itibis;

$query = $base->query("INSERT INTO rt (Nombre,Apellido,Telefono,Correo,Ciudad,Fecha,Producto,Descripcion,Cantidad,Itebis,Subtotal,Total) VALUES ('$Nombre','$Apellido','$Telefono','$Correo','$Ciudad','$Fecha','$Producto','$Descripcion','$Cantidad','$Itebis','$Subtotal','$Total')");

if($query = true){
	header('location:index.php');
}
else{
	echo '<script type="text/javascript">
	        alert("No se puedo registrar sus datos");
	        </script>';
}
}

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Agregar</title>
	<style type="text/css">

		body{
			font-size: 20px;
			font-family: Cambria;
		}
		.container{
			background-color: #FFFDD0;
			margin-top: 2%;
			border: inset;
		}
		hr{
			border: 1px solid;
		}
		.col-12{
			border: 3px dashed;
			background-color: #F8DE7E;
			F8DE7E
		}
	</style>
</head>
<body>
<form method="post">
<div class="container">
	<header> 
		<h3><p align="center">Nueva cotizacion</p></h3>
		<h3><a href="index.php" aling="left">Regresar</a></h3>
	</header>
	<hr/>

	<div  align="center">
	<h3>Descripcion del cliente</h3>
    </div>
    <hr/>
<div class="col-12">
<div class="row">
    <div class="col-6">
    	<label class="form-label" >Nombre:</label>
    	<div class="col-8">
    	<input type="text" name="Nombre" id="Nombre" class="form-control" required>
    	</div>
	</div>
    <div class="col-6">
    	<label class="form-label" >Apellido:</label>
    	<div class="col-8">
    	<input type="text" name="Apellido" id="Apellido" class="form-control" required>
   		</div>
    </div>
    <div class="col-6">
    	<br/>
    	<label class="form-label" >Telefono:</label>
    	<div class="col-8">
    	<input type="text" name="Telefono" id="Telefono" class="form-control" required>
   		</div>
    </div>

    <div class="col-6">
    	<br/>
    	<label class="form-label" >Correo:</label>
    	<div class="col-8">
    	<input type="text" name="Correo" id="Correo" class="form-control" required>
   		</div>
    </div>

    <div class="col-6">
    	<br/>
    	<label class="form-label" >Ciudad:</label>
    	<div class="col-8">
    	<input type="text" name="Ciudad" id="Ciudad" class="form-control" required>
   		</div>
    </div>

    <div class="col-6">
    	<br/>
    	<label class="form-label" >Fecha:</label>
    	<div class="col-8">
    	<input type="date" name="Fecha" id="Fecha" class="form-control" required>
   		</div>
   		<br/>
    </div>

</div>
</div>
<br/>
<hr/>
<div align="center">
	<h3>Descripcion de la Factura</h3>
</div>
    <hr/>
<div class="col-12">
	<div class="row">

		<div class="col-6">
    	<label class="form-label" >Nombre Producto:</label>
    	<div class="col-8">
    	<input type="text" name="Producto" id="Producto" class="form-control" required>
    	</div>
		</div>

		<div class="col-6">
    	<label class="form-label" >Descripcion Producto:</label>
    	<div class="col-8">
    	<input type="text" name="Descripcion" id="Descripcion" class="form-control" required>
    	</div>
		</div>

		<div class="col-6">
    	<br/>
    	<label class="form-label" >Cantidad:</label>
    	<div class="col-8">
    	<input type="number" name="Cantidad" id="Cantidad" class="form-control" required>
   		</div>
    	</div>

		<div class="col-6">
    	<br/>
    	<label class="form-label" >Subtotal:</label>
    	<div class="col-8">
    	<input type="text" name="Subtotal" id="Subtotal" class="form-control" required>
    	</div>
    	<br/>
		</div>


	</div>
</div>
<div class="form-group" align="center">
	<br/>
	<h2><input type="submit" value="Agregar" class="btn btn-danger">
	<input type="reset" value="Limpiar" class="btn btn-warning"></h2>
	</div>
</div>
</form>
</body>
</html>