<?php
if(!defined('OSTCLIENTINC')) die('Kwaheri');

$email=Format::input($_POST['lemail']?$_POST['lemail']:$_GET['e']);
$ticketid=Format::input($_POST['lticket']?$_POST['lticket']:$_GET['t']);
?>
<h1>Acompanhar Chamado</h1>
<p>Para acompanhar a situação de um chamado, informe os dados abaixo.</p>
<form action="login.php" method="post" id="clientLogin">
    <?php csrf_token(); ?>
    <strong>Autenticação Obrigatória</strong>
    <div>
        <label for="email">Email:</label>
        <input id="email" type="text" name="lemail" size="30" value="<?php echo $email; ?>">
    </div>
    <div>
        <label for="ticketno">Número do Chamado:</label>
        <input id="ticketno" type="text" name="lticket" size="16" value="<?php echo $ticketid; ?>"></td>
    </div>
    <p>
        <input class="btn" type="submit" value="Consultar">
    </p>
</form>
<br>
<p>
Se este é seu primeiro acesso ou se perdeu o número do chamado, por favor <a href="open.php">crie um novo chamado</a>.    
</p>
