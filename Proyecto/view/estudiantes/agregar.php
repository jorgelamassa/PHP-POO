<div class="container">
	<div class="panel panel-info">
		<div class="panel-heading">
            <div class="btn-group pull-right">
				<button type='button' class="btn btn-info" data-toggle="modal" data-target="#nuevoProducto"><span class="glyphicon glyphicon-plus" ></span> Nuevo Producto</button>
			</div>
			<h4><i class='glyphicon glyphicon-search'></i> Agregar estudiante</h4>
		</div>
		<div class="panel-body">
						<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
							<div class="form-group col-lg-10">
								<label for="inputEmail" class="control-label">Nombre del estudiante</label>
								<input class="form-control" name="nombre" type="text" required>
							</div>
							<div class="form-group col-lg-10">
							<label for="inputEmail" class="control-label">Fecha Nacimiento</label>
								<input class="form-control" name="edad" type="date" required>
							</div>
							<div class="form-group col-lg-10">
							<label for="inputEmail" class="control-label">Promedio</label>
								<input class="form-control" name="promedio" type="number" required>
							</div>
							<div class="form-group col-lg-10">
							<label for="inputEmail" class="control-label">Sección</label>
							<select name="id_seccion" class="form-control">
							<option value="">tome una opcion</option>
								<?php while($row = mysqli_fetch_array($datos)){ ?>
									<option value="<?php echo $row['id_seccion']; ?>"><?php echo $row['nombre_seccion']; ?></option>
								<?php } ?>
							</select>
							</div>
							<div class="form-group col-lg-10">
							<label for="inputEmail" class="control-label">Imagen</label>
								<input class="form-control" name="imagen" id="imagen" type="file" >
							</div>
							<div class="form-group col-lg-10">
								<button type="submit" class="btn btn-success">Registrar</button>
								<button type="reset" class="btn btn-warning">Borrar</button>
							</div>
						</form>
		</div>
    </div>
</div>                
