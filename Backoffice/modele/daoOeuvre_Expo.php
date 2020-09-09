<?php


namespace modele;


class daoOeuvre_Expo
{
    protected $pdo;
    protected $objLog;

    /**
     * daoOeuvre_Expo constructor.
     * @param $pdo
     * @param $objLog
     */
    public function __construct($pdo, $objLog)
    {
        $this->pdo = $pdo;
        $this->objLog = $objLog;
    }

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
     * @return mixed
     */
    public function _construct($pdo, $objLog)
    {
        $this->pdo = $pdo;
        $this->objLog = $objLog;
    }


    /**
     * @param mixed $pdo
     */
    public function setPdo($pdo)
    {
        $this->pdo = $pdo;
    }


    /**
     * @return mixed
     */
    public function getPdo()
    {
        return $this->pdo;
    }

    public function getIdOeuvre($id_expo) : int
    {
        $resultat = null;
        try{
            $sql = "select id_oeuvre FROM Oeuvre_expo WHERE id_expo = $id_expo";
            $sth = $this->pdo->query($sql);
            $resultat = $sth->fetch();
        } catch (\PDOException $e)
        {
            $this->objLog->insertErrException($e);
        }
        if (resultat == null) {
            $resultat = new idOeuvre();
            $resultat->setIdOeuvre("NULL");
        }
        return $resultat;
    }


}