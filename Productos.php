<?php include "template/cabecera.php";?>

<?php
  
   $txtNombre = (isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
   $idCategoria = (isset($_POST['categoria']))?$_POST['categoria']:"";
   $precio = (isset($_POST['txtPrecio']))?$_POST['txtPrecio']:"";
   $existencia = (isset($_POST['txtExistencia']))?$_POST['txtExistencia']:"";
   $accion = (isset($_POST['accion']))?$_POST['accion']:"";
   $txtId =  (isset($_POST['idP']))?$_POST['idP']:"";
  
  
   include "ConexionMySql/conexion.php";
  
   
   switch ($accion) {
	   case 'Agregar':
		   $Sentencia = $conexion->prepare("INSERT INTO `systemlf`.`productos`(`NombreProducto`,`IdCategoria`,`Existencia`,`Precio`) VALUES(:nombre,:categoria,:cantidad,:precio);");
		   $Sentencia->bindParam(':nombre',$txtNombre);
		   $Sentencia->bindParam(':categoria',$idCategoria);
		   $Sentencia->bindParam(':cantidad',$existencia);
		   $Sentencia->bindParam(':precio',$precio);
		   if($Sentencia->execute())
		   {
			 $var = "Nuevo registro creado con éxito";
			 echo "<script> alert('".$var."'); </script>";
		   }
		 
		   break;
	   case 'Modificar':
	
		$Sentencia = $conexion->prepare("CALL `ModificarProductos`('$txtId', '$txtNombre', '$idCategoria', '$precio', '$existencia');");
		
		if($Sentencia->execute())
		{
		  $var = "Nuevo registro modiifcado con éxito";
		  echo "<script> alert('".$var."'); </script>";
		}
		
		   break;
	   case 'Eliminar':
                $query = $conexion->prepare("DELETE FROM productos WHERE idProducto = (:id)");
				$query->bindParam(':id',$txtId);
				$query->execute();
				$var = "Se Elimino el Producto exitosamente";
				echo "<script> alert('".$var."'); </script>";
		   break;
	   case 'Cancelar':
		$var = "Cancelar boton";
		echo "<script> alert('".$var."'); </script>";
			break;
	   case 'Seleccionar':
					$Seleccion = $conexion->prepare("SELECT p.NombreProducto,p.Existencia,p.Precio,c.categoria FROM systemlf.productos p  join categoria c on c.idCategoria = p.IdCategoria WHERE idProducto= :id;");
					$Seleccion->bindParam(':id',$txtId);
					$Seleccion->execute();
					$productoSeleccionado= $Seleccion->fetch(PDO::FETCH_LAZY);
                    
					$txtNombre = $productoSeleccionado['NombreProducto'];
					$categoria = $productoSeleccionado['categoria'];
					$txtExistencia = $productoSeleccionado['Existencia'];
					$txtPrecio = $productoSeleccionado['Precio'];
			break;	   

   }
 
   try {
	$AllProducts = $conexion->prepare("SELECT p.idProducto,p.NombreProducto,p.Existencia,p.Precio,c.categoria FROM systemlf.productos p  join categoria c on c.idCategoria = p.IdCategoria;");

	$AllProducts->execute();

	$listaProductos = $AllProducts->fetchAll(PDO::FETCH_ASSOC);

	$query = $conexion->prepare("SELECT count(*) 'Total' FROM productos;");
	$query->execute();
	$resultadoQuery= $query->fetch(PDO::FETCH_LAZY);
    $TotalProdcutos = $resultadoQuery['Total'];
	

   
} catch (Exception $ex) {
   echo $ex->getMessage();
}



?>
<br>
<div class="card-group">
	<div class="card">
		<img class="card-img-top" src="img/product1.jpg" alt="Card image cap">
		<div class="card-body">
			<h4 class="card-title">Title</h4>
			<p class="card-text">Text</p>
		</div>
	</div>
	<div class="card">
		<img class="card-img-top" src="img/product2.jpg" alt="Card image cap">
		<div class="card-body">
			<h4 class="card-title">Title</h4>
			<p class="card-text">Text</p>
		</div>
	</div>
	<div class="card">
		<img class="card-img-top" src="img/product3.jpg" alt="Card image cap">
		<div class="card-body">
			<h4 class="card-title">Title</h4>
			<p class="card-text">Text</p>
		</div>
	</div>
	
	<div class="card">
		<img class="card-img-top" src="img/product4.jpg" alt="Card image cap">
		<div class="card-body">
			<h4 class="card-title">Title</h4>
			<p class="card-text">Text</p>
		</div>
	</div>
</div>

<br> <br>
<div class="col-md-12">
	<br> <br>
	 <div class="card">
		 <div class="card-header">
			 <br><h2>Registrar nuevo Producto</h2> <br>
		 </div>
		 <div class="card-body">
					<form class="needs-validation" method="post" enctype="multipart/form-data" novalidate>
					<input type="hidden" name="idP" value="<?php echo $txtId; ?>">
					<div class="form-row">
					<div class="col-md-4 mb-3">
					<label for="txtNombre">Nombre del Producto</label>
					<input type="text" class="form-control" name="txtNombre" value="<?php echo $txtNombre; ?>" id="nombreProducto" placeholder="Nombre del Producto" required>
					<div class="valid-feedback">
					¡Se ve bien!
					</div>
					</div>
					<div class="col-md-4 mb-3">
					<label for="categoria">Categoria</label>
					<select name="categoria" id="categoria" value="<?php echo $categoria;?>" class="form-control"  required>
						<option value="1">Computadoras</option>
						<option value="2">Telefonos</option>
						<option value="3">Impresoras</option>
					</select>
					
					<div class="valid-feedback">
					¡Se ve bien!
					</div>
					</div>
					<div class="col-md-6 mb-3">
					<label for="txtEmail">Precio Unitario</label>
					<div class="input-group">
					<div class="input-group-prepend">
					<span class="input-group-text" id="moneda">L.</span>
					</div>
					<input type="number"  value="<?php echo $txtPrecio; ?>" class="form-control" name="txtPrecio" placeholder="Precio unitario del producto " 
					aria-describedby="inputGroupPrepend" required>
					<div class="invalid-feedback">
					ingrese el precio del producto
					</div>
					</div>
					</div>
					</div>
					<div class="form-row">
					<div class="col-md-6 mb-3">
					<label for="txtExistencia">Existencia</label>
					<input type="numeric" class="form-control" value="<?php echo $txtExistencia; ?>" name="txtExistencia" placeholder="Cantidad de existencia del producto" required>
					<div class="invalid-feedback">
					el campo es obligatorio.
					</div>
					</div>

					

					
					<br>
				
					<div class="btn-group" role="group" aria-label="">
						<button  name="accion" value="Agregar" type="submit" class="btn btn-success">Guardar</button> &nbsp;&nbsp;
						<button  type="submit" name="accion" value="Modificar" class="btn btn-warning">Modificar</button> &nbsp;&nbsp;
						<button  type="submit" name="accion" value="Cancelar" class="btn btn-info">Cancelar</button> &nbsp;&nbsp;
					</div>
					</form>
					<script>
					// Example starter JavaScript for disabling form submissions if there are invalid fields
					(function () {
					'use strict'; 
					window.addEventListener('load', function () {
						// Fetch all the forms we want to apply custom Bootstrap validation styles to
						var forms = document.getElementsByClassName('needs-validation');
						// Loop over them and prevent submission
						var validation = Array.prototype.filter.call(forms, function (form) {
							form.addEventListener('submit', function (event) {
							if (form.checkValidity() === false) {
								event.preventDefault();
								event.stopPropagation();
							}
					form.classList.add('was-validated');
						}, false);
						});
					}, false);
					})();
					</script>
					
					
				</div>
		 </div>
	 </div>
    

<div class="col-md-12">
    <div class="card">
		<div class="card-header">
			Lista de Productos (<?php echo $TotalProdcutos; ?>)
		</div>
		<div class="card-body">
		    <table class="table">
				<thead>
					<tr>
						<th>Id Producto</th>
						<th>Nombre Producto</th>
						<th>Existencia</th>
						<th>Precio Unitario</th>
						<th>Categorias</th>
						<th>Acción</th>
					</tr>
				</thead>
				<tbody>
			
				<?php  foreach($listaProductos as $var) { ?>
						
				
						<tr>
							<td><?php echo $var['idProducto']; ?></td>
							<td><?php echo $var['NombreProducto']; ?></td>
							<td><?php echo $var['Existencia']; ?></td>
							<td><?php echo $var['Precio']; ?></td>
							<td>
								   <?php 
									   echo $var['categoria'];
								   ?>
							</td>
							<td>
								<form method="post">
									<input type="hidden" name="idP" value="<?php echo $var['idProducto']; ?>">
									<button  name="accion" value="Seleccionar" type="submit" class="btn btn-primary">Seleccionar</button>  &nbsp;
									<button  type="submit" name="accion" value="Eliminar" class="btn btn-danger">Eliminar</button> 
								</form>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	
	</div>
</div>



<?php include "template/footer.php";?>
