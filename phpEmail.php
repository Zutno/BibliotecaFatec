<?php
// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
require_once('../phpmailer/class.phpmailer.php');

// Inicia a classe PHPMailer
$mail = new PHPMailer();
// Define os dados do servidor e tipo de conexão
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

$mail->IsSMTP(true); // Define que a mensagem será SMTP
$mail->Host = "smtp.gmail.com"; // Endereço do servidor SMTP
$mail->Port = 465;
$mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional)
$mail->SMTPSecure = 'ssl';
$mail->Username = 'testefatec2017@gmail.com'; // Usuário do servidor SMTP
$mail->Password = 'F@tec2017'; // Senha do servidor SMTP

// Define o remetente
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->From = "testefatec2017@gmail.com"; // Seu e-mail
$mail->FromName = "Gestão de livros"; // Seu nome
// Define os destinatário(s)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

$mail->AddAddress('eu@gmail.com', 'Fulano da Silva');
// Define os dados técnicos da Mensagem
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML

// Define a mensagem (Texto e Assunto)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->Subject  = "Mensagem Teste"; // Assunto da mensagem
$mail->Body = "Este é o corpo da mensagem de teste, em <b>HTML</b>!  :)";
$mail->AltBody = "Este é o corpo da mensagem de teste, em Texto Plano! \r\n :)";
// Define os anexos (opcional)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
//$mail->AddAttachment("c:/temp/documento.pdf", "novo_nome.pdf");  // Insere um anexo
// Envia o e-mail
$enviado = $mail->Send();
// Limpa os destinatários e os anexos
$mail->ClearAllRecipients();
$mail->ClearAttachments();
// Exibe uma mensagem de resultado
if ($enviado) {
  echo "E-mail enviado com sucesso!";
}
else {
  echo "Não foi possível enviar o e-mail.";
  echo "<b>Informações do erro:</b> " . $mail->ErrorInfo;
}
?>