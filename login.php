<?php

	if(!isset($_POST['user_log'])){
		echo "Acesso indevido";
	}else{

		$vlogin = $_POST['user_log'];
		$vsenha = $_POST['sen_log'];
		
		include "conexao.inc";
		
		$sql = "SELECT * FROM teste_login WHERE login = '$vlogin' AND senha = '$vsenha'";
		$res = mysqli_query($con,$sql);
		$lin = mysqli_affected_rows($con);
		
		if($lin == 1){
			echo "Login realizado com sucesso!";
		}else{
			echo "Falha no login<br/>";
			echo "<a href='form_login.html'>Tentar novamente</a>";
		}
		
		mysqli_close($con);

	}
?>