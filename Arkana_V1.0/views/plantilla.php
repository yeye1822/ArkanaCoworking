<?php 

require_once 'views/vStructure.php';

$vStructure = new StructureHTML();

$vStructure->head();
include_once 'modulos/vHeader.php';
include_once 'modulos/vSection.php';
include_once 'modulos/vPlanEstrategico.php';
include_once 'modulos/vPortafolio.php';
include_once 'modulos/vBlog.php';
include_once 'modulos/vFooter.php';


$vStructure->pieHTML();
