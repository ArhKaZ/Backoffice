<?php


class Oeuvre_expo
{
    protected $id_oeuvre;
    protected $id_expo;

    /**
     * @return int
     */
    public function getIdOeuvre()
    {
        return $this->id_oeuvre;
    }

    /**
     * @return int
     */
    public function getIdExpo()
    {
        return $this->id_expo;
    }

    /**
     * @param int $id_oeuvre
     */
    public function setIdOeuvre($id_oeuvre)
    {
        $this->id_oeuvre = $id_oeuvre;
    }

    /**
     * @param int $id_expo
     */
    public function setIdExpo($id_expo)
    {
        $this->id_expo = $id_expo;
    }


}