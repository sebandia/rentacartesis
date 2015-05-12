 	<?=$this->load->view('headers/menu');?>

	<div class="clearfix">&nbsp;</div>
	<div class="clearfix">&nbsp;</div>

	<div class="container">
		<div class="col-md-8">
		<center>
			<h2>Ver todos los automoviles</h2>
			</center>
		</div>
	</div>

	<div class="container">
		<div class="col-md-12">
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>Marca</th>
						<th>Modelo</th>
						<th>Acciones</th>
					</tr>	
				</thead>
				<tbody>
				<?php 
					if ($enlaces != FALSE){
						foreach ($enlaces->result() as $row){
							echo "<tr>";
								echo "<td>".$row->marca."</td>";
								echo "<td>".$row->modelo."</td>";
								echo "<td>";
									echo "<a href='".base_url()."main/editarauto/".$row->id."' class='label label-success'>";
										echo "<span class='glyphicon glyphicon-pencil'></a></span>";
								//	echo "&nbsp;&nbsp;"; 
                                 //     echo "&nbsp;&nbsp;";  
									echo "<a href='".base_url()."index.php/main/eliminarauto/".$row->id."' class='label label-danger'>";
										echo "<span class='glyphicon glyphicon-minus'></a></span>";


								echo "</tr>";
								

						}	
					}				
				?>
				</tbody>
			</table>	
		</div>
	</div>	

</div>
