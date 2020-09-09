<?php


class artistes
{
    protected $id;
    protected $nom;
    protected $biographie;
    protected $sommaire;
    protected $citation;
    protected $photo;
    protected $nom_artiste;


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
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @return string
     */
    public function getBiographie()
    {
        return $this->biographie;
    }

    /**
     * @return string
     */
    public function getSommaire()
    {
        return $this->sommaire;
    }


    /**
     * @return string
     */
    public function getCitation()
    {
        return $this->citation;
    }

    /**
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @return string
     */
    public function getNomArtiste()
    {
        return $this->nom_artiste;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @param string $biographie
     */
    public function setBiographie($biographie)
    {
        $this->biographie = $biographie;
    }

    /**
     * @param string $sommaire
     */
    public function setSommaire($sommaire)
    {
        $this->sommaire = $sommaire;
    }

    /**
     * @param string $citation
     */
    public function setCitation($citation)
    {
        $this->citation = $citation;
    }

    /**
     * @param string $photo
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }

    /**
     * @param string $nom_artiste
     */
    public function setNomArtiste($nom_artiste)
    {
        $this->nom_artiste = $nom_artiste;
    }


}