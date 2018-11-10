<?php include 'inc/header.php'; ?>

<!-- CONTENT WRAPPER -->
<div class="content-wrapper">
	<section class="content-header no-index">
	    <div class="info-box p-rel">
	    	<span class="info-box-icon"><i class="fa fa-book"></i></span>
	    	<div class="info-box-content">
	          	<h2 class="info-box-text"><b>Gestion Categoria Investigador</b></h2>
	          	<span class="info-box-number">A continuación podra registrar, eliminar la información.</span>
	        </div>
	    </div>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-xs-6">
				<div class="box">
					<div class="box-header">
		              	<h3 class="box-title">Listado</h3>
		            </div>
		            <div class="box-body">
		            	<table id="example" class="table table-striped table-bordered" style="width:100%">
					        <thead>
					            <tr>
					                <th>#</th>
					                <th>Tipo</th>
					                <th>Acciones</th>
					            </tr>
					        </thead>
					        <tbody>
					            <tr>
					                <td>1</td>
					                <td>Inv. Docente</td>
					                <td class="text-center">
					                	<button type="button" class="btn btn-danger btn-xs">
					                		<i class="fa fa-trash" aria-hidden="true"></i>
					                	</button>
					                </td>
					            </tr>
					        </tbody>
					    </table>
		            </div>
				</div>
			</div>
		</div>
	</section>
</div>
<a href="" data-toggle="modal" data-target="#modal" class="btn btn-danger pull-right btn-fixed" title="Agregar Nuevo Personal">
	<i class="fa fa-plus" style="vertical-align: bottom;"></i>
</a>
<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
    		<form action="">
	      		<div class="modal-header">
	        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        		<h4 class="modal-title">Formulario de Registro</h4>
	      		</div>
	      		<div class="modal-body">	        		
        			<div class="form-group">
	                  	<label>Nombre</label>
	                  	<input type="text" class="form-control">
	                </div>	        		
	      		</div>
		      	<div class="modal-footer">
		       		<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
		        	<button type="button" class="btn btn-primary">Guardar</button>
		      	</div>
	      	</form>
    	</div><!-- /.modal-content -->
  	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php include 'inc/footer.php' ?>