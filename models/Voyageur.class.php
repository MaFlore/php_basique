<?php
class Voyageur{
  private $nom;
  private $prenom;
  private $numVol;
  private $nombreBagage;

  public function __construct($nom, $prenom, $numVol, $nombreBagage)
  {
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->numVol=$numVol;
        $this->nombreBagage=$nombreBagage;
  }
}
?>  