	<!-- Navbar -->
	<?=$this->load->view('headers/menu');?>
	<!-- End navbar -->

	<div class="container">
		<div class="row">
			<div class="col-md-8"> 
			<center>   
	    	<h3>Agregar Automovil</h3> </center>
				<form class="form-horizontal" role="form" id="form" name="form" action="<?=base_url()?>index.php/main/guardarauto" method="POST">
					<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Marca</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="marca" name="marca" placeholder="Ingresa un marca">
				    </div>
			  	</div>
			  	<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Modelo</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="modelo" name="modelo" placeholder="Ingresa un modelo">
				    </div>
			  	</div>
			  	<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Año</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="anio" name="anio" placeholder="Ingresa un año">
				    </div>
			  	</div>
			  	<div class="form-group">
    				<div class="col-sm-offset-2 col-sm-10">
      				<button type="submit" class="btn btn-ttc" id="guardar" name="guardar">Guardar</button>       				
    				</div>
  				</div>
				</form>
			</div>
    </div>
  </div>

	