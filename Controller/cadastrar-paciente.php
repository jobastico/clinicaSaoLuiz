<?php

	include_once '..\Model\paciente.php';
	include_once '..\Conexao\pacienteDAO.php';
	include_once '.\validacoes.php';

	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$tele = $_POST['telefone'];
	$data = $_POST['data'];
	$cep = $_POST['cep'];
	$logra = $_POST['logradouro'];
	$num = $_POST['numero'];
	$sexo = $_POST['sexo'];
    $cpf = preg_replace( '/[^0-9]/is', '', $_POST['cpf']);
	
	$pacDao = new PacienteDAO();
	$pacInfo = $pacDao->validaCpf($cpf);
	$pacInfoEmail = $pacDao->validaEmail($email);

	if ($pacInfo){
		echo json_encode("CPF já cadastrado");
	} else {
		if ($pacInfoEmail){
			echo json_encode("Email já cadastrado");
		} else {
			if (validaCPF($cpf) == true){
				if (validaTelefone($tele) == true){
					if (validaCep($cep)){
						if ($data < date('Y-m-d')){
							$pac = new Paciente($nome, $cpf, $email, $senha, $tele, $data, $logra, $num, $cep, $sexo);
							if ($pacDao->Inserir($pac) == true){
								echo json_encode("Paciente cadastrado com successo");
							} else {
								echo json_encode("Erro! verifique os campos");
							}
						} else {
							echo json_encode("Data Inválida");
						}
					} else {
						echo json_encode("CEP Inválido");
					}
				} else {	
					echo json_encode('Telefone Inválido');
				}
			} else {
				echo json_encode('CPF Inválido');
			}
		}
	}