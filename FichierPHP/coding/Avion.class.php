<?php
class Avion{
    private $idAvion;
    private $idVoyageur;
    private $nomAvion;
    private $nombreVoyageur;

    public function __construct($idAvion, $idVoyageur, $nomAvion ,$nombreVoyageur) {
        $this->idAvion=$idAvion;
        $this->idVoyageur=$idVoyageur;
        $this->nomAvion= $nomAvion;
        $this->nombreVoyageur =$nombreVoyageur;      
}
}

?>