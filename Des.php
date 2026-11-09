<?php
class Des{
    //ATTRIBUT
    private int $nbrFace;
    private int $score;

    //CONSTRUCTEUR
    public function __construct(int $newNbrFace){
        $this->nbrFace = $newNbrFace;
    }

    //GETTER ET SETTER
    /**
     * Get the value of nbrFace
     *
     * @return int
     */
    public function getNbrFace(): int {
        return $this->nbrFace;
    }

    /**
     * Set the value of nbrFace
     *
     * @param int $nbrFace
     *
     * @return self
     */
    public function setNbrFace(int $nbrFace): self {
        $this->nbrFace = $nbrFace;
        return $this;
    }

    /**
     * Get the value of score
     *
     * @return int
     */
    public function getScore(): int {
        return $this->score;
    }

    /**
     * Set the value of score
     *
     * @param int $score
     *
     * @return self
     */
    public function setScore(int $score): self {
        $this->score = $score;
        return $this;
    }

    //METHOD
    public function lancer(){
        $this->score = random_int(1,$this->nbrFace);
        return $this->score;
    }
}