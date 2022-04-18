<!-- L’e-commerce vende prodotti per gli animali. I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L’utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta. -->

<?php 

require_once __DIR__ . '/classi/utenti.php';
require_once __DIR__ . '/classi/prodotti.php';

$Mario = new Utente("Mario","Rossi","mariorossi@emai.it","Via di qui, 11",1234567890);
$Mario->addMetodoPagamento("5488 4566 6128 7320","04/22","885","Mario","Rossi","Mastercard");
// var_dump($Mario);
$Mario->removeMetodoPagamento();

$Giovanni = new UtenteRegistrato("Giovanni","Rossi","giovannirossi@emai.it","Via di qui, 11",1234567890,'123');
$Giovanni->addMetodoPagamento("5448 4566 6168 7327","08/26","885","Giovanni","Rossi","Mastercard");

$Mario->addCarrello($croccantini);
$Giovanni->addCarrello($croccantini);
$Giovanni->addCarrello($dentastix);
$Mario->addCarrello($tiragraffi);
// var_dump($Mario,$Giovanni);

$Mario->removeCarrello(1);
$Giovanni->removeCarrello(0);
// var_dump($Mario,$Giovanni);

$Giovanni->checkout();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>