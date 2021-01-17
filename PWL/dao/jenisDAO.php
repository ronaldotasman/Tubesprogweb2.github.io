<?php


class jenisDAO
{
    public function fetchkendaraan()
    {
        $link = PDOUtil::createConnection();
        $query = "SELECT * FROM jenis_kendaraan";
        $result = $link->query($query);
        $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'jeniskendaraan');
        PDOUtil::closeConnection($link);
        return $result;
    }

    public function fetchdata()
    {
        $link = PDOUtil::createConnection();
        $query = "select * from jenis_kendaraan";
        $result = $link->query($query);
        $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'jeniskendaraan');
        PDOUtil::closeConnection($link);
        return $result;
    }
}