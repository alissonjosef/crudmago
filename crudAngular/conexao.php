<?php 

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With'); 
header('Content-Type: application/json; charset=utf-8');  


//dados do banco no servidor local
$banco = 'crudangular';
$host = 'localhost';
$usuario = 'root';
$senha = '';


/*
//dados do banco no servidor hospedado
$banco = 'crudangular9';
$host = 'mysql669.umbler.com';
$usuario = 'alissonangular';
$senha = '5285juan';
*/

try {

	$pdo = new PDO("mysql:dbname=$banco;host=$host", "$usuario", "$senha");
	
} catch (Exception $e) {
	echo 'Erro ao conectar com o banco!! '. $e;
}

 ?>