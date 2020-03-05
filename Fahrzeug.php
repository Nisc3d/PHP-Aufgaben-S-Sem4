<?php


class Fahrzeug
{
    private $hersteller;
    private $farbe;

    public function __construct($hersteller, $farbe)
    {
        $this->hersteller=$hersteller;
        $this->farbe=$farbe;
    }

    function starten(){
        echo "Gestartet </br >";
    }

    function stoppen(){
        echo "Gestoppt </br >";
    }

}

class Auto extends Fahrzeug
{
    private $kilometerstand;

    function fahren($km){
        $this->kilometerstand += $km;
        echo $km . " km gefahren. Der Kilometerstand ist nun ". $this->kilometerstand . ". </br >";
    }
}

$fahrzeug = new Fahrzeug("VW", "gelb");
$fahrzeug->starten();
$fahrzeug->stoppen();

$auto = new Auto("Porsche", "lila");
$auto->starten();
$auto->fahren(20);
$auto->fahren(30);
$auto->fahren(-10);
$auto->stoppen();