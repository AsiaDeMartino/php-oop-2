<!-- L’e-commerce vende prodotti per gli animali. I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L’utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta. -->

<?php 

class Utente {
    public $nome;
    public $cognome;
    protected $email;
    protected $indirizzo;
    protected $telefono;
    protected $sconto = 0;

    function __construct(string $nome, string $cognome, string $email, string $indirizzo, int $telefono){
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->email = $email;
        $this->indirizzo = $indirizzo;
        $this->telefono = $telefono;
    }

}

class UtenteRegistrato extends Utente {
    private $password;
    
    function __construct(string $nome, string $cognome, string $email, string $indirizzo, int $telefono,$password){
        parent::__construct($nome, $cognome, $email, $indirizzo, $telefono);
        $this->setPassword($password);
        $this->setSconto();
    }

    public function setPassword($password){
        $this->password = $password;
    }

    public function setSconto(){
        $this-> sconto = 20;
    }

}

$Mario = new Utente("Mario","Rossi","mariorossi@emai.it","Via di qui, 11",1234567890);
var_dump($Mario);

$Mario = new UtenteRegistrato("Mario","Rossi","mariorossi@emai.it","Via di qui, 11",1234567890,"1234");
var_dump($Mario);

?>