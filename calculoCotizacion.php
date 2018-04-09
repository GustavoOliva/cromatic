<?php

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$direccion = $_POST["direccion"];
/*PARED 1*/
$superficieAncho = $_POST["superficieAncho"];
$superficieAlto = $_POST["superficieAlto"];
$puertaAncho = $_POST["puertaAncho"];
$puertaAlto = $_POST["puertaAlto"];
$ventanaAncho = $_POST["ventanaAncho"];
$ventanaAlto = $_POST["ventanaAlto"];
$selectValor = $_POST["tipoPintura"];
$areaSuperficie = $superficieAlto * $superficieAncho;
$calculoVentana = $ventanaAlto * $ventanaAncho;
$calculoPuerta = $puertaAncho * $puertaAlto; 
$areaPared1 = $areaSuperficie - $calculoPuerta - $calculoVentana;
/*PARED 2*/
$superficieAncho2 = $_POST["superficieAncho2"];
$superficieAlto2 = $_POST["superficieAlto2"];
$puertaAncho2 = $_POST["puertaAncho2"];
$puertaAlto2 = $_POST["puertaAlto2"];
$ventanaAncho2 = $_POST["ventanaAncho2"];
$ventanaAlto2 = $_POST["ventanaAlto2"];
$areaSuperficie2 = $superficieAlto2 * $superficieAncho2;
$calculoVentana2 = $ventanaAlto2 * $ventanaAncho2;
$calculoPuerta2 = $puertaAncho2 * $puertaAlto2; 
$areaPared2 = $areaSuperficie2 - $calculoPuerta2 - $calculoVentana2;
/*PARED 3*/
$superficieAncho3 = $_POST["superficieAncho3"];
$superficieAlto3 = $_POST["superficieAlto3"];
$puertaAncho3 = $_POST["puertaAncho3"];
$puertaAlto3 = $_POST["puertaAlto3"];
$ventanaAncho3 = $_POST["ventanaAncho3"];
$ventanaAlto3 = $_POST["ventanaAlto3"];
$areaSuperficie3 = $superficieAlto3 * $superficieAncho3;
$calculoVentana3 = $ventanaAlto3 * $ventanaAncho3;
$calculoPuerta3 = $puertaAncho3 * $puertaAlto3; 
$areaPared3 = $areaSuperficie3 - $calculoPuerta3 - $calculoVentana3;
/*PARED 4*/
$superficieAncho4 = $_POST["superficieAncho4"];
$superficieAlto4 = $_POST["superficieAlto4"];
$puertaAncho4 = $_POST["puertaAncho4"];
$puertaAlto4 = $_POST["puertaAlto4"];
$ventanaAncho4 = $_POST["ventanaAncho4"];
$ventanaAlto4 = $_POST["ventanaAlto4"];
$areaSuperficie4 = $superficieAlto4 * $superficieAncho4;
$calculoVentana4 = $ventanaAlto4 * $ventanaAncho4;
$calculoPuerta4 = $puertaAncho4 * $puertaAlto4; 
$areaPared4 = $areaSuperficie4 - $calculoPuerta4 - $calculoVentana4;
/*AREA TOTAL DE LA HABITACION*/
$areaTotal = $areaPared1 + $areaPared2 + $areaPared3 + $areaPared4;
$_memdioGalon= 1.8927;
$_galon = 3.7854; 
$_cubeta = 18.927; 
$presentacion;
$precio;
$cantidadPintura;
$cantidadGalones;
$totalDescuento;
$promo;

/*COMIENZA PINTURA DE AGUA*/
if($selectValor == 'Agua'){
	$cantidadPintura = $areaTotal /10;
	$cantidadGalones = round($cantidadPintura / $_galon);
	

	
	if($cantidadPintura <= $_memdioGalon ){
		$presentacion = "1/2 galón de pintura";
		$precio = "Q. 150.00";
    }
    /*CALCULO GALONES DE AGUA*/
    else if($cantidadPintura > $_memdioGalon && $cantidadPintura <= $_cubeta){
    	$pr = 250;
    	$presentacion = $cantidadGalones . " galón de pintura";
    	$precio = "Q. 250.00";
    	$totalT = $cantidadGalones * $pr;

    	if($cantidadGalones == 3){
    		$totalDescuento = $totalT * 0.05;
    		$totalFinal = $totalT - $totalDescuento;
    		$promo = "Q. " .$totalDescuento;

    	}else if($cantidadGalones == 4 || $cantidadGalones ==5){
    		$totalFinal = $pr * 4;
    		$promo = "1 galón gratis";


    	}else{
    		$totalFinal = $totalT;
    		$promo = "NO APLICA";
    	}
    /*}else if($cantidadPintura > $_cubeta){
    	$presentacion ="1 cubeta de pintura";
    	$precio = "Q. 999.00" */
    }



    /*CALCULO CUBETA DE AGUA*/
    else {
		$pr = 999.00;
		$cantidadCubetas = round($cantidadPintura / $_cubeta);
       	$totalT = $cantidadCubetas * $pr;
    	$presentacion = $cantidadCubetas . " cubeta de pintura";
    	

    	$precio = "Q. 999.00";
		
    	/*DESCUENTO*/
		
    	if($cantidadCubetas == 2){
    		$totalDescuento = $totalT * 0.10;
    		$totalFinal = $totalT - $totalDescuento;
    		$promo = "Q. " . $totalDescuento;
    	}else if($cantidadCubetas == 4 || $cantidadCubetas ==5){
    		$totalFinal = $pr * 4;
    		$promo = "1 cubeta gratis";


    	}else{
    		$totalFinal = $totalT;
    		$promo = "NO APLICA";
    	}



     }




}

/*TERMINA PINTURA DE AGUA*/








/*COMIENZA PINTURA DE ACEITE*/
else if($selectValor == 'Aceite'){
	$cantidadPintura = $areaTotal / 13;
	$cantidadGalones = round($cantidadPintura / $_galon);

	if($cantidadPintura <= $_memdioGalon ){
		$presentacion = "1/2 galón de pintura";
		$precio = "Q. 240.40";
    }

    /*CALCULO GALONES DE ACEITE*/

    else if( ($cantidadPintura > $_memdioGalon) && ($cantidadPintura <= $_cubeta)){
    	$pr = 432.25;
    	$presentacion = $cantidadGalones . " galón de pintura";
    	
    	$precio = "Q. 432.25";
    	$totalT = $cantidadGalones * $pr;
    	if($cantidadGalones == 3){
    		$totalDescuento = $totalT * 0.05;
    		$totalFinal = $totalT - $totalDescuento;
    		$promo = "Q. " .$totalDescuento;

    	}else if($cantidadGalones == 4 || $cantidadGalones ==5){
    		$totalFinal =$pr*4; 
    		$promo = "1 galón gratis"; 

    	}else{
    		$totalFinal = $totalT;
    		$promo = "NO APLICA";
    	}
   /* }else if($cantidadPintura > $_cubeta){
    	$presentacion ="1 cubeta de pintura";
    	$precio = "Q. 1821.65"; */
    }
    /*CALCULO DE CUBETA DE ACEITE*/
    else {
    	$pr = 1821.65;
    	$cantidadCubetas = round($cantidadPintura / $_cubeta);
       	$totalT = $cantidadCubetas * $pr;
    	$presentacion = $cantidadCubetas . " cubeta de pintura";
    	

    	$precio = "Q. 1821.65";
		
    	/*DESCUENTO*/
		
    	if($cantidadCubetas == 2){
    		$totalDescuento = $totalT * 0.10;
    		$totalFinal = $totalT - $totalDescuento;
    		$promo = "Q. " .$totalDescuento;
    	}else if($cantidadCubetas == 4 || $cantidadCubetas ==5){
    		$totalFinal = $pr * 4;
    		$promo = "1 cubeta gratis";
    	}
    	else{
    		$totalFinal = $totalT;
    		$promo = "NO APLICA";
    	}
    	
    }





}
/*TERMINA PINTURA DE ACEITE*/





/*EMPIEZA PINTURA DE OLEO*/
else {
	$cantidadPintura = $areaTotal / 12;
	$cantidadGalones = round($cantidadPintura / $_galon);

	if($cantidadPintura <= $_memdioGalon ){
		$presentacion = "1/2 galón de pintura";
		$precio = "Q. 386.85";
    }
    /*CALCULO DE GALONES DE OLEO*/
    else if( ($cantidadPintura > $_memdioGalon) && ($cantidadPintura <= $_cubeta)){
    	$pr = 663.25;
    	$totalT = $cantidadGalones * $pr;
    	$presentacion = $cantidadGalones . " galón de pintura";
    	$precio = "Q. 663.25";
    	if($cantidadGalones == 3){
    		$totalDescuento = $totalT * 0.05;
    		$totalFinal = round($totalT - $totalDescuento, 2);
    		$promo = "Q. " .$totalDescuento;
    	}else if($cantidadGalones == 4 || $cantidadGalones ==5){

    		$totalFinal = $pr * 4; 
    		$promo = "1 galón gratis"; 

    	}else{
    		$totalFinal = $totalT;
    		$promo = "NO APLICA";
    	}
    }else {
    	$pr = 3103.55;
    	$cantidadCubetas = round($cantidadPintura / $_cubeta);
       	$totalT = $cantidadCubetas * $pr;
    	$presentacion = $cantidadCubetas . " cubeta de pintura";
    	

    	$precio = "Q. 3103.55";
		
    	/*DESCUENTO*/
		
    	if($cantidadCubetas == 2){
    		$totalDescuento = $totalT * 0.10;
    		$totalFinal = $totalT - $totalDescuento;
    		$promo = "Q. " .$totalDescuento;
    	}else if($cantidadCubetas == 4 || $cantidadCubetas ==5){
			$totalFinal = $pr * 4;
    		$promo = "1 cubeta gratis";
    	}else{
    		$totalFinal = $totalT;
    	}
}

}




?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
	<meta charset="utf-8">
	<title>Cotización</title>
</head>
<body>
	<center>
		<br>
		<br>
		<br>
		<br>
	<table border="1">
		<tr>
			<td><b> Nombre &nbsp; </b></td> <td>&nbsp; <?php echo " ". $nombre ." ".$apellido?></td>
		</tr>

		<tr>
			<td><b>Area total &nbsp;</b></td> <td>&nbsp;<?php echo " ". $areaTotal . " metros cuadrados" ?>&nbsp;</td>
		</tr>
		<tr>
			<td><b>Tipo de pintura &nbsp; </b></td> <td> &nbsp;<?php echo " ". $selectValor ?></td>
		</tr>

		<tr>
			<td><b>Cantidad de pintura &nbsp; </b></td> <td> &nbsp;<?php echo " ". round($cantidadPintura,2) . " litros" ?></td>
		</tr>


		
		<tr>
			<td><b>Descripción &nbsp; </b></td> <td> &nbsp;<?php echo   $presentacion ?>&nbsp;</td>
		</tr>

		

		<tr>
			<td><b>Precio por unidad &nbsp; </b></td> <td> &nbsp;<?php echo  $precio ?>&nbsp;</td>
		</tr>

		<tr>
			<td><b>Total sin descuento &nbsp; </b></td> <td> &nbsp;<?php echo "Q. ".  $totalT ?>&nbsp;</td>
		</tr>

		<tr>
			<td><b>Promocion o descuento &nbsp; </b></td> <td> &nbsp;<?php echo $promo ?>&nbsp;</td>
		</tr>
		<tr>
			<td><b>Total &nbsp; </b></td> <td> &nbsp;<?php echo "Q. ".  $totalFinal ?>&nbsp;</td>
		</tr>
	</table>
</center>

</body>
</html>