<?

# alterar a variavel abaixo colocando o seu email

$destinatario = "contato@bolsauninorte.com.br";

$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$telefone = $_REQUEST['telefone'];
$assunto = "NOVOS DADOS";

 // monta o e-mail na variavel $body

$body = "===================================" . "\n";
$body = $body . "NOVO CONTATO RECEBIDO" . "\n";
$body = $body . "===================================" . "\n\n";
$body = $body . "Nome: " . $nome . "\n";
$body = $body . "Email: " . $email . "\n";
$body = $body . "WhatsApp: " . $telefone . "\n\n";
$body = $body . "===================================" . "\n";

// envia o email
mail($destinatario, $assunto , $body, "From: $email\r\n");


mail($email, BOLSA UNINORTE, "Olá" .$nome. "\n recebemos sua solicitação de Bolsa, nossa equipe entrará em contato com você em breve!", "From: $destinatario");

// redireciona para a página de obrigado
header("location:index.html");


?>