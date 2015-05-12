	<!-- Navbar -->
	<?=$this->load->view('headers/menu');?>
	<!-- End navbar -->

	<div class="container">
		<div class="row">
			<div class="col-md-8">   
			<center> 
	    	<h3>editar Automoviles</h3>
	    	</center>
				<form class="form-horizontal" role="form" id="form" name="form" action="<?=base_url()?>index.php/main/editarEnlaceauto/<?=$id?>" method="POST">
					<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Marca</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="marca" name="marca" value="<?=$marca?>" placeholder="Ingresa una marca">
				    </div>
			  	</div>
			  	<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Modelo</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="modelo" name="modelo" value="<?=$modelo?>" placeholder="Ingresa un modelo">
				    </div>
			  	</div>
			  	
			  	<div class="form-group">
    				<div class="col-sm-offset-2 col-sm-10">
      				<button type="submit" class="btn btn-ttc" id="editar" name="editar enlace">Editar automoviles</button>      				
    				</div>
  				</div>
				</form>
			</div>
    </div>
  </div>

	