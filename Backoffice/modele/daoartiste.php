<?php


namespace modele;

use metier\artiste;

class daoartiste
{
    protected $pdo;
    protected $objLog;

    /**
     * @return mixed
     */
    public function getObjLog()
    {
        return $this->objLog;
    }

    /**
     * @param mixed $objLog
     */
    public function setObjLog($objLog): void
    {
        $this->objLog = $objLog;
    }

    /**
     * @param $pdo
     * @param $objLog
     */
    public function _construct($pdo, $objLog)
    {
        $this->pdo = $pdo;
        $this->objLog = $objLog;
    }

    /**
     * @return mixed
     */
    public function getPdo()
    {
        return $this->pdo;
    }

    /**
     * @param mixed $pdo
     */
    public function setPdo($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAllArtist() : array
    {
        $resultat[0]=null;
        try{
            $sql = "select nomArtiste from artiste";
            $sth = $this->pdo->query($sql);
            $resultat = $sth->fetchAll(\PDO::FETCH_CLASS, "metier\\artiste");
        }
        catch (\PDOException $e){
            $this->objLog->insertErrException($e);
        }
        return $resultat;
    }

    public function getArtiste($id_artiste) : artiste
    {
        $resultat = null;
        try{
            $sql = "select * FROM Artiste  WHERE id = $id_artiste ";
            $sth = $this->pdo->query($sql);
            $sth->setFetchMode(\PDO::FETCH_CLASS,'metier\\Artistes');
            $resultat = $sth->fetch(\PDO::FETCH_CLASS);
        } catch (\PDOException $e)
        {
            $this->objLog->insertErrException($e);
        }
        if (resultat == null) {
            $resultat = new artiste();
            $resultat->setId("NULL");

        }
        return $resultat;
    }

    public function insertArtiste(artiste $newArtiste)
    {
        try {
            $tab['id'] = $newArtiste->getId();
            $tab['nom'] = $newArtiste->getNom();
            $tab['biographie'] = $newArtiste->getBiographie();
            $tab['citation'] = $newArtiste->getPhoto();
            $tab['nom_artiste'] = $newArtiste->getNom_artiste();
            $tab['sommaire'] = $newArtiste->getSommaire();

            $sql = "INSERT INTO Artistes ( id, nom, biographie, citation, photo, nom_artiste, sommaire)";
            $sth = $this->pdo->prepare($sql);
            $sth->execute($tab);
        }
        catch (\PDOException $e) {
            $this->objLog->insertErrException($e);
        }
    }
}