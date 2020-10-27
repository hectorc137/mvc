<?php

?>

<!DOCTYPE html>
<html>
     <head>
	    <title><?php echo $data["titulo"];?></title>
	 
	 </head>
    <body>
	    <h2><?php echo $data["titulo"];?></h2>
		
		<a href="">Agregar</a>
		
		<br/>
		<br/>
		
		<table border= "1" width="80%">
		<thead>
		     <tr>
			   <th>placa</th>
			   <th>marca</th>
			   <th>modelo</th>
			   <th>año</th>
			   <th>color</th>
			 
			 
			 </tr>
		
		</thead>
		
		<tbody>
		   <?php foreach ($data["vehiculos"] as $dato){
		        echo"<tr>";
				echo"<td>".$dato["placa"]."</td>";
				echo"<td>".$dato["marca"]."</td>";
				echo"<td>".$dato["modelo"]."</td>";
				echo"<td>".$dato["anio"]."</td>";
				echo"<td>".$dato["color"]."</td>";
				echo"</tr>";
		   
		   }
		   ?>
		
		
		</tbody>				
		</table>	
	</body>
</html>