<?php

			include("conexao.php");
				$nomecomple = $_POST['nomecomple'];
				$nomeuser = $_POST['nomeuser'];
				$email = $_POST['email'];
				$senha = $_POST['senha'];
	 			
			$result_cadastro = "INSERT INTO projetodefi.tbl_usuario (nome_completo,senha,usuario,email) VALUES('$nomecomple','$senha','$nomeuser', '$email')";

			if($con->query($result_cadastro) === TRUE){
				$con->close();
				header('location: sucesso.php');
				exit();
			}else{   				

				echo "	Erro: " . $con->error;		

				}

			$con->close();
			?>