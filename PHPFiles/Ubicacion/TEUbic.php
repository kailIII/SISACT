<?php
	function TEditarUbic(){
		$Conexion = odbc_connect('SisAct2','sa','17316045');
		$TColum = array(20,70);
		$url = "'PHPFiles/Ubicacion/EEUbic.php'";
		$contenedor = "'contenedor'";
		$Ubic = "'%%'";
		$stmt = "EXEC BuscarUbicaciones @Ubicacion=$Ubic";
		$exito = odbc_exec($Conexion,$stmt);
		$Fields = odbc_num_fields($exito);
		print '<table border="0" width="100%" class="tablas" cellspacing="6" cellpadding="0"><tr>';
		// Titulo de columnas
		for ($i=1; $i<=$Fields; $i++){
			print("<th style='{color:white;}' bgcolor='#0064a2' width='".$TColum[($i-1)]."%'>".odbc_field_name($exito,$i)."</th>");
		}   
		print "<th style='{color:white;}' bgcolor='#0064a2' width='10%'>Accion</th>";
		// Cuerpo de la tabla
		while(odbc_fetch_row($exito)){
			print "</tr><tr>";
			$parametros = "'";
			for($i=1; $i<=$Fields; $i++){
				printf("<td>%s</td>",odbc_result($exito,$i));
				$parametros = $parametros.odbc_field_name($exito,$i)."=".odbc_result($exito,$i);
				if($i<$Fields)
					$parametros = $parametros."&";
			}
			$parametros = $parametros."'";
			print '<td align="center"><input type="button" class="boton" value="Modificar" onclick="EnvioGet('.$url.','.$parametros.','.$contenedor.')"/><td></tr>';
		}
		print "</table>";
		odbc_close($Conexion);
	}
?> 