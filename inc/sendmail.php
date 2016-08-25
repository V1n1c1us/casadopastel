<?php
echo "teste1";
print_r($_POST);
if ($_POST['send'] == 1) {
	echo "teste2";
    $enviar = new SendMail($_POST['nome'], $_POST['email'], $_POST['telefone'], $_POST['mensagem']);
    $enviado = $enviar->enviaEmail();
}

/* CLASSE ENVIAR EMAIL */

class SendMail
{
	
    protected $nome;
    protected $email;
    protected $telefone;
    protected $mensagem;

    public function __construct($nome, $email, $telefone, $mensagem)
    {
        $this->nome = $nome;
        $this->email = $email;
		$this->telefone = $telefone;
        $this->mensagem = $mensagem;
    }

    public function enviaEmail()
    {
        if ($this->nome == "") {
            return false;
        }
        if ($this->email == "") {
            return false;
        }
		if ($this->telefone == "") {
            return false;
        }
        if ($this->mensagem == "") {
            return false;
        }
echo "teste3";
        $email_remetente = "contato@solvengenharia.com.br";
        $email_destinatario = array("suporte@iguanaweb.com.br");
        $email_assunto = "Contato via Site";
        $email_conteudo = "<p style='line-height:30px;'>";
        $email_conteudo .= "<b>Nome</b>: $this->nome \n";
		$email_conteudo .= "<b>E-email</b>: $this->email \n";
        $email_conteudo .= "<b>Assunto</b>: $this->telefon \n";
        $email_conteudo .= "<b>Mensagem:</b> $this->mensagem \n</p>";


        $email_headers = implode("\n", array("From: $email_remetente", "Reply-To: $this->email", "Subject: $email_assunto", "Return-Path: $email_remetente", "MIME-Version: 1.0", "X-Priority: 3", "Content-Type: text/html; charset=UTF-8"));

        foreach ($email_destinatario as $destinatario) {
            mail($destinatario, $email_assunto, nl2br($email_conteudo), $email_headers);

        }
        if ($enviado = 1) {
            echo "</b>Email enviado com sucesso!</b>";
        } else {
            echo "</b>Falha no envio do E-Mail!</b>";
        }
    }
}

?>	