<link rel="stylesheet" type="text/css" href="packages/grafica/css/grafica.css">
<script type="text/javascript" src="packages/grafica/js/d3.js"></script>
<script type="text/javascript" src="packages/grafica/js/ib-graficas.js"></script>
<script type="text/javascript" src="packages/grafica/novedades/controllers/gNovedadesCtrl.js"></script>
<?php
$Nmenu = '456';
if(isset($_SESSION['usuario_cod'])){
	require_once('autentificacion/aut_verifica_menu.php');
	$us = $_SESSION['usuario_cod'];
}else{
	$us = $_POST['usuario'];
}
?>

<div id="Cont_gNovedades"></div>
<input name="usuario" id="usuario" type="hidden" value="<?php echo $us;?>" />