<!-- L’e-commerce vende prodotti per gli animali. I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L’utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta. -->

<?php 
class Prodotto {
    public $nome;
    public $marca;
    public $categoria;
    public $prezzo;
    public $descrizione;
    
    function __construct(string $nome,string $marca, string $categoria, float $prezzo, string $descrizione){
        $this->nome = $nome;
        $this->marca = $marca;
        $this->categoria = $categoria;
        $this->prezzo = $prezzo;
        $this->descrizione = $descrizione;
    }


}

?>