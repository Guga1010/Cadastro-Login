<?php

	if(!isset($_POST['log_cad'])){
		echo "Acesso indevido";
	}else{

		$vlogin = $_POST['log_cad'];
		$vsenha = $_POST['sen_cad'];
		$vemail = $_POST['ema_cad'];
		
		include "conexao.inc";
		
		$sql = "SELECT * FROM tb_login WHERE login = '$vlogin'"; // Alterar, caso tenha criado uma tabela com nome diferente
		$res = mysqli_query($con,$sql);
		$lin = mysqli_affected_rows($con);
		
		if($lin > 0 ){
			echo "Uma conta já existe com esse nome<br/>";
			echo "<a href='form_cad.html'>Tentar outro nome</a>";
		}else{
			
			$sql = "SELECT * FROM tb_login WHERE email = '$vemail'"; // Alterar, caso tenha criado uma tabela com nome diferente
			$res = mysqli_query($con,$sql);
			$lin = mysqli_affected_rows($con);
			
			if($lin > 0 ){
				echo "Uma conta já existe com esse email<br/>";
				echo "<a href='form_cad.html'>Tentar outro email</a>";
			}else{
			
				$sql = "INSERT INTO tb_login VALUES (NULL,'$vlogin','$vsenha','$vemail')"; // Alterar, caso tenha criado uma tabela com nome diferente
				mysqli_query($con,$sql);
				$lin = mysqli_affected_rows($con);

				if($lin == 1){
					echo "Cadastrado com sucesso!<br/>";
					echo "<a href='form_login.html'>Fazer login</a>";
				}else{
					echo "Falha no cadastro";
				}
			}
		}
		mysqli_close($con);
	}
?>
