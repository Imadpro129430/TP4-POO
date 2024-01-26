<?php
class Personnage
{
    private $nom;
    private $vie;
    private $atk;

    public function __construct($nom, $vie = 100, $atk = 20)
    {
        $this->nom = $nom;
        $this->vie = $vie;
        $this->atk = $atk;
    }
    public function getnom()
    {
        return $this->nom;
    }
    public function getvie()
    {
        return $this->vie;
    }
    public function setVie($vie)
    {
        $this->vie = $vie;
    }
    public function crier()
    {
        echo "Taiaut", PHP_EOL;
    }
    public function regenerer($nbPoints)
    {
        $this->vie += $nbPoints;
    }
    public function estMort()
    {
        if ($this->vie <= 0) {
            return true;
        } else {
            return false;
        }
    }
    public function  getAtk(){
        return $this->atk;
    }
    public function setAtk($atk){
        $this->atk = $atk;
    }
    public function attaque($cible){
        $cible-> vie -= $this->atk; 
        $cible->empecher_negatif($cible);
    }
    private function empecher_negatif($cible){
        if($cible->vie<=0){
            $cible->setVie(0);
        }
    }
}
?>