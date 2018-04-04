<?php 

require 'alunos.php';

$alunos = new Alunos();

$method = $_SERVER['REQUEST_METHOD'];


switch ($method) {
	case 'GET':
		$id = isset($_GET['id']) ? $_GET['id'] : null;
		
		if ($id) {
			$result = $alunos->find($id);
		} else {
			$result = $alunos->all();	
		}

		if ($result) 
		{
			header('HTTP/1.1 200');
			header('Content-type:application/json; charset=UTF-8');
			echo json_encode([
					"status" => "ok",
					"data"   => $result,
					"message"=> ""
				]);
		} else 
		{
			header('HTTP/1.1 200'); // 204 No Content
			header('Content-type:application/json; charset=UTF-8');
			echo json_encode([
					"status" => "erro",
					"data"   => "",
					"message"=> "DAdos Não Encontrado"
				]);
		}
		
		break;
	
	default:
		# code...
		break;
}