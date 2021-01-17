<?php


class pomDAO
{
    public function fetchPom(){
        $link =PDOUtil::createConnection();
        $query = "SELECT * FROM pom_bensin";
        $result = $link->query($query);
        $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'pombensin');
        PDOUtil::closeConnection($link);
        return $result;
    }
    public function addpom(pombensin $pom){
        $result= 0;
        $link =PDOUtil::createConnection();
        $query= "INSERT INTO pom_bensin (kode_nama_pom,alamat_pom) values(?,?)";
        $stmt = $link->prepare($query);
        $stmt->bindValue(1,$pom->getKodeNamaPom());
        $stmt->bindValue(2,$pom->getAlamatPom());
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