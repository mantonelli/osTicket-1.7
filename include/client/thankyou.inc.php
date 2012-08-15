<?php
if(!defined('OSTCLIENTINC') || !is_object($ticket)) die('Kwaheri rafiki!');
//Please customize the message below to fit your organization speak!
?>
<div style="margin:5px 100px 100px 0;">
    <?php echo Format::htmlchars($ticket->getName()); ?>,<br>
    <p>
     Obrigado por entrar em contato.<br>
     Seu chamado foi criado com sucesso e em breve será atendido pelo suporte técnico.</p>
          
    <?php if($cfg->autoRespONNewTicket()){ ?>
    <p>Um email com o número do chamado foi enviado para <b><?php echo $ticket->getEmail(); ?></b>.
        Esse número será necessário para consultar a situação do seu chamado posteriormente. 
    </p>
    <p>
      Se desejar complementar seu chamado com novas informações, por favor siga as instruções enviadas no email.
    </p>
    <?php } ?>
    <p>Suporte Técnico</p>
</div>
