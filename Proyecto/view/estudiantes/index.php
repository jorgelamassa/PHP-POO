<div class="container">
	<div class="panel panel-info">
		<div class="panel-heading">
            <div class="btn-group pull-right">
				<button type='button' class="btn btn-info" data-toggle="modal" data-target="#nuevoProducto"><span class="glyphicon glyphicon-plus" ></span> Nuevo Producto</button>
			</div>
			<h4><i class='glyphicon glyphicon-search'></i> vista de los estudiante</h4>
		</div>
		<div class="panel-body">
            <div class="table-responsive">
                <table class="table">
                    <tr  class="info">
                        <th>Imagen</th>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Fcha nacimiento</th>
                        <th>Promedio</th>
                        <th>Seccion</th>	
                        <th>Acciòn</th>
                    </tr>
                    <?php 
                    while($row = mysqli_fetch_array($datos) ) { 
                    ?>
                        <tr>	
                            <td><img class="img-responsive img-thumbnail" src="<?php echo URL?>view/template/img/<?php echo $row['imagen_studen']; ?>"></td>
                            <td><?php echo $row['id_estudiante']; ?></td>
                            <td><?php echo $row['nombre_studen']; ?></td>
                            <td><?php echo $row['fecha_nacimiento_studen'];;?></td>
                            <td><?php echo $row['promedio_studen'];?></td>
                            <td><?php echo $row['nombre_seccion']; ?></td>
                            <td>
                                <a class=" btn btn-warning" href="<?php echo URL;?>estudiantes/editar<?php ECHO $row['id_estudiante'];?>">EDITAR</a>
                                <a class=" btn btn-danger" href="<?php echo URL;?>estudiantes/editar<?php ECHO $row['id_estudiante'];?>">eliminar</a>
                            </td>
                        </tr> 
                        <?php }?>	  
                </table>
			</div>                 
        </div>
    </div>
</div>                
