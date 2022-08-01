<?php

// Assunto
if(!empty($_GET['tipo']))
	$tipo = $_GET['tipo'];
if(empty($_GET['tipo']))
	$tipo = "";

//Parametros padrões de envio
$emailDeEnvio="contato@compartveg.com.br";//Email de envio
$emailDestinatario="contato@compartveg.com.br;carol@compartveg.com.br";//Destinatário padrão
$sucesso = "alert(\"Formulário enviado com sucesso! Nossa Equipe responderá o mais rápido possível.\")";
$erro 	 = "alert(\"Houve um erro ao tentar enviar o formulário de rastreabilidade, favor entre em contato pelo endereço contato@compartveg.com.br .\")";

//Conteúdo do email dinâmico
switch($tipo){
	case "rastreabilidade":
		//Parâmetros padrões
		$subject = utf8_decode('Rastreabilidade Compartveg');//Assunto
		
		//Campos do formulário
		$FormNome			= utf8_decode($_POST['nome']);
		$FormDestinatatio	= utf8_decode($_POST['email']);
		$FormProdutos		= utf8_decode($_POST['produtos']);
		$FormFornecedores	= utf8_decode($_POST['fornecedores']);
		$FormClientes		= utf8_decode($_POST['clientes']);
		$FormLocalizacao	= utf8_decode($_POST['localizacao']);
		$FormAtuacao 		= utf8_decode($_POST['atuacao']);
		$FormMensagem		= utf8_decode($_POST['mensagem']);	
		//Mensagem
		$message = '
			<html>
				<head>
					<title>Formulário de contato compartveg.com.br</title>
				</head>
				<body>
					<img src="http://compartveg.com.br/assets/img/logo3.png" width="300px"  alt="logo"/>
					<br /><br /><br />
					<p>Email de Contato Site CompartVeg</p>
					<p>Nome: '.$FormNome.' / Email: '.$FormDestinatatio.'</p>
					<p>Quantidade Fornecedores: '.$FormFornecedores.' / Clientes: '.$FormClientes.'</p>
					<p>Produtos: '.$FormProdutos.'</p>
					<p>Location: '.$FormLocalizacao.'</p>
					<p>Location: '.$FormAtuacao.'</p>
					<p></p>
					<p>Mensagem: </p>
					<p>'.$FormMensagem.'</p>
				</body>
			</html>
		';
	break;	
	case "referencias":
		//Parâmetros padrões
		$subject = utf8_decode('Refências Técnicas Compartveg');//Assunto
		//Campos do formulário
		$FormNome			= utf8_decode($_POST['nome']);
		$FormDestinatatio	= utf8_decode($_POST['email']);
		$FormTelefone		= utf8_decode($_POST['telefone']);
		$FormMensagem		= utf8_decode($_POST['mensagem']);	
		//Mensagem
		$message = '
			<html>
				<head>
					<title>Formulário de contato compartveg.com.br</title>
				</head>
				<body>
					<img src="http://compartveg.com.br/assets/img/logo3.png" width="300px"  alt="logo"/>
					<br /><br /><br />
					<p>Email de Contato Site CompartVeg</p>
					<p>Nome: '.$FormNome.' </p>
					<p>Email: '.$FormDestinatatio.'</p>
					<p>Telefone: '.$FormTelefone.'</p>
					<p></p>
					<p>Mensagem: </p>
					<p>'.$FormMensagem.'</p>
				</body>
			</html>
		';
	break;
	default:
		//Parâmetros padrões
		$subject = utf8_decode('Email Contato Site Compartveg');//Assunto
		//Campos do formulário
		$FormNome			=	utf8_decode($_POST['nome']);
		$FormDestinatatio	=	utf8_decode($_POST['email']);
		$FormTelefone		=	utf8_decode($_POST['telefone']);
		$FormEmpresa		=	utf8_decode($_POST['empresa']);
		$FormMensagem		=	utf8_decode($_POST['message']);
		//Mensagem
		$message = '
			<html>
				<head>
					<title>Formulário de contato compartveg.com.br</title>
				</head>
				<body>
					<img src="http://compartveg.com.br/assets/img/logo3.png" width="300px"  alt="logo"/>
					<br /><br /><br />
					<p>Email de Contato Site CompartVeg</p>
					<p>Nome: '.$FormNome.'</p>
					<p>Email: '.$FormDestinatatio.'</p>
					<p>Telefone: '.$FormTelefone.'</p>
					<p>Empresa: '.$FormEmpresa.'</p>
					<p>'.$FormMensagem.'</p>
				</body>
			</html>
		';
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
//sleep(10);
//header("Location: http://compartveg.com.br/");
?>