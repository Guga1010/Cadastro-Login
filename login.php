<?php

	if(!isset($_POST['user_log'])){
		echo "Acesso indevido";
	}else{

		$vlogin = $_POST['user_log'];
		$vsenha = $_POST['sen_log'];
		
		include "conexao.inc";
		
		$sql = "SELECT * FROM tb_login WHERE login = '$vlogin'";
		$res = mysqli_query($con,$sql);
		$lin = mysqli_affected_rows($con);
		
		if($lin == 1){
			$sql = "SELECT * FROM tb_login WHERE login = '$vlogin' AND senha = $vsenha";
			$res = mysqli_query($con,$sql);
			$lin = mysqli_affected_rows($con);
		
			if($lin == 1){
				echo "Login realizado com sucesso!";
			}else{
				echo "Senha incorreta<br/>";
				echo "<a href='form_login.html'>Tentar novamente</a>";
			}
		}else{
			echo "Login incorreto ou inexistente<br/>";
			echo "<a href='form_login.html'>Tentar novamente</a>";
		}
		
		mysqli_close($con);

	}
?>
