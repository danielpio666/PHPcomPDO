<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
	<title>Fase 1</title>

	<style type="text/css">
		.listas { width: 100%; float: left; height: auto; }
		ul {list-style:none; padding: 0; margin: 0; display: table; }
		li { float: left; height: 20px; margin-left: 3px; }
		.listas .col1 {width: 10%; text-align: right;}
		.listas .col2 {width: 75%;}
		.listas .col3 {width: 10%; text-align: right;}

		.titulos {background-color: #000066; color:#fff; text-align: center !important;}
	</style>

</head>
<body>
	<? 
	try {
		$user_db	= "root";
		$pass_db	= "";
		$banc_db	= "aula";
		$driv_db	= "mysql";
		$port_db	= "3306";
		$host_db	= "localhost";
		$txt_conect = "{$driv_db}:host={$host_db};port={$port_db};dbname={$banc_db}";

		// Set options
		$options = array(
			PDO::ATTR_PERSISTENT    => true,
			PDO::ATTR_ERRMODE       => PDO::ERRMODE_EXCEPTION,
			PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
		);


		$conexao = new \PDO($txt_conect,"{$user_db}","{$pass_db}", $options);
	} 	
	catch (\PDOException $e) {
		echo "Não foi possivel fazer a conexão com o Banco de Dados <br> Erro : ".$e->getCode()." - ".$e->getMessage();
		break;
	}

	$listagem_query = "SELECT * FROM alunos";

	echo "<div class='listas'>";
	echo "<h2>Todos os Alunos</h2>";
	echo "<ul>";

	echo "<li class='col1 titulos'>ID</li>";
	echo "<li class='col2 titulos'>Nome</li>";
	echo "<li class='col3 titulos'>Nota</li>";

	foreach ($conexao->query($listagem_query) as $lista) {
		echo "<li class='col1'>".$lista['id']."</li>";
		echo "<li class='col2'>".$lista['nome']."</li>";
		echo "<li class='col3'>".$lista['nota']."</li>";
	}

	echo "</ul>";
	echo "</div>";

	$listagem_query = "SELECT * FROM alunos WHERE nota >= :nota ";
	$stmt = $conexao->prepare($listagem_query);
	$stmt->bindValue("nota","8");
	$stmt->execute();
	$myAlunos = $stmt->fetchall(PDO::FETCH_ASSOC);

	echo "<br><br><div class='listas'>";
	echo "<h2>Alunos com as Maiores notas</h2>";

	echo "<ul>";

	echo "<li class='col1 titulos'>ID</li>";
	echo "<li class='col2 titulos'>Nome</li>";
	echo "<li class='col3 titulos'>Nota</li>";

	foreach ($myAlunos as $lista) {
		echo "<li class='col1'>".$lista['id']."</li>";
		echo "<li class='col2'>".$lista['nome']."</li>";
		echo "<li class='col3'>".$lista['nota']."</li>";
	}

	echo "</ul>";
	echo "</div>";

	?>

</body>
</html>