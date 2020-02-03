<?php 

require_once 'views/vStructure.php';

@$opcion = $_GET['id'];
@$nombre = $_POST['txtNombre'];
@$correo = $_POST['txtCorreo'];
@$asunto = $_POST['txtAsunto'];
@$mensaje = $_POST['txtMensaje'];

$vStructure = new StructureHTML();

$vStructure->head(); 

switch ( $opcion ) {
	case 1:
		include_once 'modulos/vHead.php';
		include_once 'modulos/vDescripcionBlog.php';
		include_once 'modulos/vFooter.php';
		break;
	case 2:
		include_once 'modulos/vHead.php';
		include_once 'modulos/vContacto.php';
		include_once 'modulos/vFooter.php';
		break;
	case 3:
		include_once 'modulos/vEnviarCorreo.php';
		break;
	default:
		include_once 'modulos/vHeader.php';
		include_once 'modulos/vSection.php';
		include_once 'modulos/vPlanEstrategico.php';
		include_once 'modulos/vPortafolio.php';
		include_once 'modulos/vBlog.php';
		include_once 'modulos/vFooter.php';
		break;
}

$vStructure->pieHTML();
