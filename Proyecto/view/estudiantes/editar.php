<?php $secciones = $estudiante -> listar_secciones();?>
<div class="container">
	<div class="panel panel-info">
		<div class="panel-heading">
			<h4><i class='glyphicon glyphicon-search'></i> Editar estudiante</h4>
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-3">
					<div class="panel panel-default">
					<div class="panel-body">
						<img class="img-responsive" src="<?php echo URL;?>View/template/img/<?php echo $datos['imagen_studen']; ?>">
					</div>
					</div>
				</div>
				<div class="col-md-9">
					<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
						<div class="form-group">
						<label for="inputEmail" class="control-label">Nombre del estudiante</label>
							<input class="form-control" value="<?php echo $datos['nombre_studen']; ?>" name="nombre" type="text" required>
						</div>
						<div class="form-group">
						<label for="inputEmail" class="control-label">Edad</label>
							<input class="form-control" value="<?php echo $datos['fecha_nacimiento_studen']; ?>" name="edad" type="date" required>
						</div>
						<div class="form-group">
						<label for="inputEmail" class="control-label">Promedio</label>
							<input class="form-control" value="<?php echo $datos['promedio_studen']; ?>" name="promedio" type="number" required>
						</div>
						<div class="form-group"><label for="inputEmail" class="control-label">Sección (<b>Sección Actual: <?php echo $datos['nombre_seccion']; ?></b>)</label>
						<select name="id_seccion" class="form-control">
							<?php while($row = mysqli_fetch_array($secciones)){ ?>
								<option value="<?php echo $row['id_seccion']; ?>"><?php echo $row['nombre_seccion']; ?></option>
							<?php } ?>
						</select>
						</div>
						<input value="<?php echo $datos['id_estudiante']; ?>" name="id_estudiante" type="hidden" required>
						<div class="form-group">
							<button type="submit" class="btn btn-success">Editar</button>
							<button type="reset" class="btn btn-warning">Borrar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>