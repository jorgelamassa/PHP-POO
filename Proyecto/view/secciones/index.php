<div class="container">
	<div class="panel panel-info">
		<div class="panel-heading">
            <div class="btn-group pull-right">
				<button type='button' class="btn btn-info" data-toggle="modal" data-target="#nuevoProducto"><span class="glyphicon glyphicon-plus" ></span> Nuevo Producto</button>
			</div>
			<h4><i class='glyphicon glyphicon-search'></i> vista de las Secciones</h4>
		</div>
		<div class="panel-body">
            <div class="table-responsive">
                <table class="table">
                    <tr  class="info">
                        <th>ID</th>
                        <th>Nombre de la seccion</th>	
                        <th>Acciòn</th>
                    </tr>
                    <?php 
                    while($row = mysqli_fetch_array($datos) )
                    { 
                    ?>
                        <tr>	
                            <td><?php echo $row['id_seccion']; ?></td>
                            <td><?php echo $row['nombre_seccion'];?></td>
                            <td>
                                <a class=" btn btn-warning" href="<?php echo URL;?>estudiantes/editar<?php ECHO $row['id_seccion'];?>">EDITAR</a>
                                <a class=" btn btn-danger" href="<?php echo URL;?>estudiantes/editar<?php ECHO $row['id_seccion'];?>">eliminar</a>
                            </td>
                        </tr>  
                    <?php } ?>  
                </table>
			</div>                 	
        </div>
    </div>
</div>              
