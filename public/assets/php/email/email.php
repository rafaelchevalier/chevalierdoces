<?php

// Assunto
if(!empty($_GET['tipo']))
	$tipo = $_GET['tipo'];
if(empty($_GET['tipo']))
	$tipo = "";

//Parametros padrões de envio
$emailDeEnvio="contato@chevalierdoces.com.br";//Email de envio
$emailDestinatario="contato@chevalierdoces.com.br";//Destinatário padrão
$sucesso = "alert(\"Formulário enviado com sucesso! Obrigado por entrar em contato conosco.\")";
$erro 	 = "alert(\"Houve um erro ao tentar enviar o formulário, favor entre em contato pelo endereço de e-mail contato@chevalierdoces.com.br, que alguem de nossa equipe retornará.\")";


//Campos do formulário
		$FormNome			= ($_POST['nome']);
		$FormDestinatatio	= ($_POST['email']);
		$FormTelefone		= ($_POST['telefone']);
		$FormMotivo_contato	= ($_POST['motivo_contato']);
		$FormMensagem		= ($_POST['message']);
		
		$FormCPF			= $_POST['cpf'];
		$FormCep			= $_POST['cep'];
		$FormEndereco		= ($_POST['endereco']);
		$FormNumero			= ($_POST['numero']);
		$FormComplemento			= ($_POST['complemento']);
		$FormBairro			= ($_POST['bairro']);
		$FormUF				= ($_POST['uf']);
		$FormCidade			= ($_POST['cidade']);

//Conteúdo do email dinâmico
switch($tipo){
	case 'representacao':
		//Campos
		//Cabeçalho
		$emailDestinatario="representacao@chevalierdoces.com.br;contato@chevalierdoces.com.br";//Destinatário padrão
		$subject = utf8_decode('Contato Chevalier Doces (REPRESENTAÇÃO)');//Assunto
		//Mensagem
		$message = utf8_decode('
			<html>
				<head>
					<title>Formulário de contato para representação Chevalier Doces ('.$FormMotivo_contato.'). </title>
				</head>
				<body>
					<img src="http://chevalierdoces.com.br/assets/img/logo.png" width="300px"  alt="logo"/>
					<br /><br /><br />
					<p>Email de Contato Chevalier Doces ('.$FormMotivo_contato.')</p>
					<p>Nome: '.$FormNome.' / Email: '.$FormDestinatatio.'</p>
					<p>Telefone: '.$FormTelefone.'</p>
					<p>CEP: '.$FormCep.'</p>
					<p>Endereço: '.$FormEndereco." Num ".$FormNumero.'</p>
					<p>Complemento: '.$FormComplemento.'</p>
					<p>Bairro: '.$FormBairro.'</p>
					<p>CIDADE: '.$FormCidade." - ".$FormUF.'</p>
					
					<p>Motivo Contato: "Representação"</p>
					<p></p>
					<p>Mensagem: </p>
					<p>'.$FormMensagem.'</p>
					
				</body>
			</html>
		');
	break;
	default:
		//Cabeçalho
		$subject = utf8_decode('Contato Chevalier Doces ('.$FormMotivo_contato.')');//Assunto
		//Mensagem
		$message = utf8_decode('
			<html>
				<head>
					<title>Formulário de contato Chevalier Doces ('.$FormMotivo_contato.'). </title>
				</head>
				<body>
					<img src="http://chevalierdoces.com.br/assets/img/logo.png" width="300px"  alt="logo"/>
					<br /><br /><br />
					<p>Email de Contato Chevalier Doces ('.$FormMotivo_contato.')</p>
					<p>Nome: '.$FormNome.' / Email: '.$FormDestinatatio.'</p>
					<p>Telefone: '.$FormTelefone.'</p>
					<p>Motivo Contato: '.$FormMotivo_contato.'</p>
					<p></p>
					<p>Mensagem: </p>
					<p>'.$FormMensagem.'</p>
				</body>
			</html>
		');
	break;
}

$to = $emailDestinatario;

// Para o envio do HTML, deve configurar o Content-type header
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'To:' . $to . "\r\n";
$headers .= 'From:' . $emailDeEnvio . "\r\n";
$headers .= 'Cc:' . $FormDestinatatio . "\r\n";


// Envia o Email
$envio = mail($to, $subject, $message, $headers);

if($envio){
	echo"
		<script type=\"text/javascript\">	
			".$sucesso."
			history.back(-1);
		</script>
	";
	}
else{
	echo"
		<script type=\"text/javascript\">	
			".$erro."
			history.back(-1);
		</script>
	";
	}
?>