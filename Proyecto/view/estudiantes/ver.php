  <div class="container">
	<div class="panel panel-info">
		<div class="panel-heading">
    <h3 class="panel-title">Perfil del estudiante <?php echo $datos['nombre_studen']; ?><b></b></h3>		</div>
		<div class="panel-body">
      <div class="row">
        <div class="col-md-3">
          <img class="img-responsive" src="<?php echo URL;?>view/template/img/<?php echo $datos['imagen_studen']; ?>">
        </div>
        <div class="col-md-9">
          <ul class="list-group">
            <li class="list-group-item">
              <b>Nombre: </b><?php echo $datos['nombre_studen']; ?>
            </li>
            <li class="list-group-item">
              <b>Fecha nacimiento: </b><?php echo $datos['fecha_nacimiento_studen']; ?>
            </li>
            <li class="list-group-item">
              <b>Promedio: </b><?php echo $datos['promedio_studen']; ?>
            </li>
            <li class="list-group-item">
              <b>Sección: </b><?php echo $datos['nombre_seccion']; ?>
            </li>
            <li class="list-group-item">
              <b>fecha de registro: </b><?php echo $datos['fecha_registro_studen']; ?>
            </li>

          </ul>
        </div>
      </div>
    </div>
  </div>
</div>