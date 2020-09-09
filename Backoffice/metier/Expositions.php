<?php


class Expositions
{
    protected $id;
    protected $date_debut;
    protected $date_fin;
    protected $titre;
    protected $note_comis;
    protected $tarif;
    protected $fond;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->date_debut;
    }

    /**
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->date_fin;
    }

    /**
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @return string
     */
    public function getNoteComis()
    {
        return $this->note_comis;
    }

    /**
     * @return string
     */
    public function getTarif()
    {
        return $this->tarif;
    }

    /**
     * @return string
     */
    public function getFond()
    {
        return $this->fond;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param \DateTime $date_debut
     */
    public function setDateDebut($date_debut)
    {
        $this->date_debut = $date_debut;
    }

    /**
     * @param \Datetime $date_fin
     */
    public function setDateFin($date_fin)
    {
        $this->date_fin = $date_fin;
    }

    /**
     * @param string $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    /**
     * @param string $note_comis
     */
    public function setNoteComis($note_comis)
    {
        $this->note_comis = $note_comis;
    }

    /**
     * @param string $tarif
     */
    public function setTarif($tarif)
    {
        $this->tarif = $tarif;
    }

    /**
     * @param string $fond
     */
    public function setFond($fond)
    {
        $this->fond = $fond;
    }


}