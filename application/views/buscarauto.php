<div class="clearfix">&nbsp;</div>
<div class="clearfix">&nbsp;</div>

<div class="container">
	<div class="col-md-8">
	<center>
		<h2>Buscar Automovil</h2>
		</center>
	</div>
</div>

<div id="container">	
	<div class="col-md-12">		

		<?=$this->load->view('headers/menu');?>

		<div class="clearfix">&nbsp;</div>

		<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<form id="form" method="GET" action="<?=base_url()?>index.php/main/buscarauto">
							<input type="text" id="query" name="query" />
							<button type="submit" class="btn btn-ttc" id="buscar" value="Buscar">Buscar</button> 
						</form>
						<div class="clearfix">&nbsp;</div>
					</tr>
					<tr>
						<th>marca</th>
						<th>modelo</th>
						<th>Acciones</th>
					</tr>	
				</thead>
				<tbody>
				<?php 
					if ($result != FALSE){
						foreach ($result->result() as $row){
							echo "<tr>";
								echo "<td>".$row->marca."</td>";
								echo "<td>".$row->modelo."</td>";
								echo "<td>";
								//	echo "<a href='' class='label label-success'><span class='glyphicon glyphicon-pencil'></a></span>";
								//	echo "&nbsp;&nbsp;";
                               echo "<a href='".base_url()."main/editarauto/".$row->id."' class='label label-success'>";
										echo "<span class='glyphicon glyphicon-pencil'></a></span>";

									echo "<a href='".base_url()."index.php/control/eliminarauto/".$row->id."' class='label label-danger'>";
										echo "<span class='glyphicon glyphicon-minus'></a></span>";
								echo "</tr>";
						}	
					}				
				?>
				</tbody>
			</table>	


		<p>Total de resultados: <b><?php echo $total; ?></b></p>

	</div>
