<?php


class kendaraanDAO
{

    public function fetchkendaraan(){
        $link =PDOUtil::createConnection();
        $query = "SELECT * FROM jenis_kendaraan";
        $result = $link->query($query);
        $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'jeniskendaraan');
        PDOUtil::closeConnection($link);
        return $result;
    }

    public function add(kendaraan $kendaraan){
        $result= 0;
        $link =PDOUtil::createConnection();
        $query= "INSERT INTO jenis_kendaraan (id_user,id_kendaraan,no_plat) values(?,?,?)";
        $stmt = $link->prepare($query);
        $stmt->bindValue(1,$kendaraan->getIdUser());
        $stmt->bindValue(2,$kendaraan->getIdKendaraan());
        $stmt->bindValue(3,$kendaraan->getNoPlat());

        $link->beginTransaction();
        if($stmt->execute()){
            $link->commit();
            $result= 1;
        }
        else{
            $link->rollBack();
        }
        PDOUtil::closeConnection($link);
        return $result;
    }
}