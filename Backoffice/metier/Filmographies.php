<?php


class Filmographies
{
    protected $id;
    protected $real;
    protected $date_sortie;
    protected $duree;
    protected $type;
    protected $description;
    protected $id_artiste;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getReal()
    {
        return $this->real;
    }

    /**
     * @return \DateTime
     */
    public function getDateSortie()
    {
        return $this->date_sortie;
    }

    /**
     * @return \DateTime
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return int
     */
    public function getIdArtiste()
    {
        return $this->id_artiste;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param string $real
     */
    public function setReal($real)
    {
        $this->real = $real;
    }

    /**
     * @param \DateTime $date_sortie
     */
    public function setDateSortie($date_sortie)
    {
        $this->date_sortie = $date_sortie;
    }

    /**
     * @param \DateTime $duree
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @param int $id_artiste
     */
    public function setIdArtiste($id_artiste)
    {
        $this->id_artiste = $id_artiste;
    }


}