<?php


class pombensin
{
    private $id_pos_BBM;
    private $kode_nama_pom;
    private $alamat_pom;

    /**
     * @return mixed
     */
    public function getIdPosBBM()
    {
        return $this->id_pos_BBM;
    }

    /**
     * @param mixed $id_pos_BBM
     */
    public function setIdPosBBM($id_pos_BBM)
    {
        $this->id_pos_BBM = $id_pos_BBM;
    }

    /**
     * @return mixed
     */
    public function getKodeNamaPom()
    {
        return $this->kode_nama_pom;
    }

    /**
     * @param mixed $kode_nama_pom
     */
    public function setKodeNamaPom($kode_nama_pom)
    {
        $this->kode_nama_pom = $kode_nama_pom;
    }

    /**
     * @return mixed
     */
    public function getAlamatPom()
    {
        return $this->alamat_pom;
    }

    /**
     * @param mixed $alamat_pom
     */
    public function setAlamatPom($alamat_pom)
    {
        $this->alamat_pom = $alamat_pom;
    }

}