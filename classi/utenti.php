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
    protected $metodiPagamento = [];

    function __construct(string $nome, string $cognome, string $email, string $indirizzo, int $telefono){
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->email = $email;
        $this->indirizzo = $indirizzo;
        $this->telefono = $telefono;
    }

    public function addMetodoPagamento($numeroCarta,$dataScadenza,$cvv,$nomeIntestatario,$cognomeIntestatario,$circuito){
        $date = explode("/",date("m/y"));
        $scadenza = explode("/",$dataScadenza);
        $mese = intval($date[0]);
        $anno = intval($date[1]);
        // var_dump($mese,$anno);
        
        if (intval($scadenza[1]) > $anno )  {
            array_push($this->metodiPagamento,[
                "numeroCarta"=>$numeroCarta,
                "dataScadenza"=>$dataScadenza,
                "cvv"=>$cvv,
                "nomeIntestatario"=>$nomeIntestatario,
                "cognomeIntestatario"=>$cognomeIntestatario,
                "circuito"=>$circuito
            ]);
        } 
        elseif (intval($scadenza[0]) >= $mese and intval($scadenza[1]) == $anno){
            array_push($this->metodiPagamento,[
                "numeroCarta"=>$numeroCarta,
                "dataScadenza"=>$dataScadenza,
                "cvv"=>$cvv,
                "nomeIntestatario"=>$nomeIntestatario,
                "cognomeIntestatario"=>$cognomeIntestatario,
                "circuito"=>$circuito
            ]);
    }else {
            echo "La tua carta è scaduta, inserisci un metodo di pagamento valido";
        }
        
    }

    public function removeMetodoPagamento(){
        array_pop($this->metodiPagamento);
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
$Mario->addMetodoPagamento("5488 4566 6128 7320","04/22","885","Mario","Rossi","Mastercard");
var_dump($Mario);
$Mario->removeMetodoPagamento();
var_dump($Mario);

?>