<?PHP
	require_once "../../Controller/clientC.php";

	$clientc=new clientc();
	
	if (isset($_POST["id"])){
		$clientc->supprimerClient($_POST["id"]);
		header('Location:afficherClients.php');
	}

?>