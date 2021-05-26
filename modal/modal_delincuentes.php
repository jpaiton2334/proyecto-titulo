<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Editar registro</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="modal/edit_delincuentes.php">
				<input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">nombres:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nombres" value="<?php echo $row['nombres']; ?> " >
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">apellidos:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="apellidos" value="<?php echo $row['apellidos']; ?>">
					</div>
				</div>
				
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Actualizar</a>
			</form>
            </div>

        </div>
    </div>
</div>


<div class="modal fade" id="delete_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Eliminar registro</h4></center>
            </div>
      
             <div class="modal-body">	
            	<p class="text-center">Estas seguro que quieres borrarlo?</p>
				<h2 class="text-center"><?php echo $row['nombres'] ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Si, estoy seguro</a>
            </div>

        </div>
    </div>
</div>