<?php
require_once('../helpers/render.php');
if (isset($_GET['page']))
	$page = $_GET['page'];
else
	$page = 'index';
switch ($page)
{
	case 'contact':
		render('templates/header', array('active' => 'contact'));
		render('contact');
		render('templates/footer');
		break;
	default:
		render('templates/header', array('active' => 'home'));
		render('home');
		render('templates/footer');
		break;
}
?>