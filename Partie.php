<?php
class Partie{
    //ATTRIBUT
    private Joueur $joueur1;
    private Joueur $joueur2;
    private int $nbrTour;
    private int $scoreJ1 = 0;
    private int $scoreJ2 = 0;

    //CONSTRUCTEUR
    public function __construct(Joueur $newJ1, Joueur $newJ2, int $newNbrTour){
        $this->joueur1 = $newJ1;
        $this->joueur2 = $newJ2;
        $this->nbrTour = $newNbrTour;
    }

    //GETTER ET SETTER
    /**
     * Get the value of joueur1
     *
     * @return Joueur
     */
    public function getJoueur1(): Joueur {
        return $this->joueur1;
    }

    /**
     * Set the value of joueur1
     *
     * @param Joueur $joueur1
     *
     * @return self
     */
    public function setJoueur1(Joueur $joueur1): self {
        $this->joueur1 = $joueur1;
        return $this;
    }

    /**
     * Get the value of joueur2
     *
     * @return Joueur
     */
    public function getJoueur2(): Joueur {
        return $this->joueur2;
    }

    /**
     * Set the value of joueur2
     *
     * @param Joueur $joueur2
     *
     * @return self
     */
    public function setJoueur2(Joueur $joueur2): self {
        $this->joueur2 = $joueur2;
        return $this;
    }

    /**
     * Get the value of nbrTour
     *
     * @return int
     */
    public function getNbrTour(): int {
        return $this->nbrTour;
    }

    /**
     * Set the value of nbrTour
     *
     * @param int $nbrTour
     *
     * @return self
     */
    public function setNbrTour(int $nbrTour): self {
        $this->nbrTour = $nbrTour;
        return $this;
    }

    /**
     * Get the value of scoreJ1
     *
     * @return int
     */
    public function getScoreJ1(): int {
        return $this->scoreJ1;
    }

    /**
     * Set the value of scoreJ1
     *
     * @param int $scoreJ1
     *
     * @return self
     */
    public function setScoreJ1(int $scoreJ1): self {
        $this->scoreJ1 = $scoreJ1;
        return $this;
    }

    /**
     * Get the value of scoreJ2
     *
     * @return int
     */
    public function getScoreJ2(): int {
        return $this->scoreJ2;
    }

    /**
     * Set the value of scoreJ2
     *
     * @param int $scoreJ2
     *
     * @return self
     */
    public function setScoreJ2(int $scoreJ2): self {
        $this->scoreJ2 = $scoreJ2;
        return $this;
    }

    //METHOD
    public function lancerPartie(){
        for($i = 0; $i < $this->nbrTour; $i++){
            //Joueur 1 lance son dé
            $this->joueur1->lancerDes();
            $this->joueur2->lancerDes();

            //Compare les résultat
            if($this->joueur1->getValeurLance() > $this->joueur2->getValeurLance()){
                $this->scoreJ1 += 2;
            }else if($this->joueur1->getValeurLance() < $this->joueur2->getValeurLance()){
                $this->scoreJ2 += 2;
            }else{
                $this->scoreJ1++;
                $this->scoreJ2++;
            }
        }

        //Comparer les scores finaux
            if($this->scoreJ1 > $this->scoreJ2){
                echo("Le vainqueur est ".$this->joueur1->getNom()." avec ".$this->scoreJ1);
            }else if($this->scoreJ1 < $this->scoreJ2){
                echo("Le vainqueur est ".$this->joueur2->getNom()." avec ".$this->scoreJ2);
            }else{
                echo("Les vainqueurs sont ".$this->joueur1->getNom()." et ".$this->joueur2->getNom()." avec ".$this->scoreJ1);
            }
    }
}