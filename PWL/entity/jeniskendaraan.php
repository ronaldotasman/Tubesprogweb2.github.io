<?php


class jeniskendaraan
{
    private $id_kendaraan;

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
    public function getJenisKendaraan()
    {
        return $this->jenis_kendaraan;
    }

    /**
     * @param mixed $jenis_kendaraan
     */
    public function setJenisKendaraan($jenis_kendaraan)
    {
        $this->jenis_kendaraan = $jenis_kendaraan;
    }
    private $jenis_kendaraan;

}