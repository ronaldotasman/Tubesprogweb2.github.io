<?php


class kendaraan
{
    private $id_user;
    private $id_kendaraan;
    private $no_plat;

    /**
     * @return mixed
     */
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * @param mixed $id_user
     */
    public function setIdUser($id_user)
    {
        $this->id_user = $id_user;
    }

    /**
     * @return mixed
     */
    public function getIdKendaraan()
    {
        return $this->id_kendaraan;
    }

    /**
     * @param mixed $id_kendaraan
     */
    public function setIdKendaraan($id_kendaraan)
    {
        $this->id_kendaraan = $id_kendaraan;
    }

    /**
     * @return mixed
     */
    public function getNoPlat()
    {
        return $this->no_plat;
    }

    /**
     * @param mixed $no_plat
     */
    public function setNoPlat($no_plat)
    {
        $this->no_plat = $no_plat;
    }

}