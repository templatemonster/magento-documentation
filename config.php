<?php 

if (strpos($_SERVER['REQUEST_URI'], 'index.php')) {
	$path = dirname("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
} else {
	$path = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
}

//$path = 111;

// Variables
$product_name = "Magento";
$product_desc = "Documentation v2-0";
$doc_title = $product_name . " " . $product_desc;

$lang = 'en';
if (isset($_GET['lang'])) {
	$lang = $_GET['lang'];
}

$section_param = 'introduction';
if (isset($_GET['section'])) {
	$section_param = $_GET['section'];
}
if (isset($_GET['utm_campaign'])) {
 header('Location: index.php');
}