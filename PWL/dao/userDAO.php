<?php


class userDAO
{
    public function login(user $user){
        $link=PDOUtil::createConnection();
        $query = "select * from users where username =? and password= ?";
        $stmt = $link->prepare($query);
        $stmt->bindValue(1,$user->getUsername());
        $stmt->bindValue(2,$user->getPassword());
        $stmt->execute();
        $result = $stmt->fetch();
        PDOUtil::closeConnection($link);
        return $result;
    }
    public function fetchdata(){
        $link=PDOUtil::createConnection();
        $query = "select * from users ";
        $result = $link->query($query);
        $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'user');
        PDOUtil::closeConnection($link);
        return $result;
    }

    public function register(user $user){
        $result= 0;
        $link =PDOUtil::createConnection();
        $query= "INSERT INTO users (nama,username,password,role_user,tgl_lahir) values(?,?,?,?,?)";
        $stmt = $link->prepare($query);
        $stmt->bindValue(1,$user->getNama());
        $stmt->bindValue(2,$user->getUsername());
        $stmt->bindValue(3,$user->getPassword());
        $stmt->bindValue(4,$user->getRoleUser());
        $stmt->bindValue(5,$user->getTglLahir());
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

    public function fetchRole(){
        $link =PDOUtil::createConnection();
        $query = "SELECT * FROM role WHERE id_role = 2";
        $result = $link->query($query);
        $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'role');
        PDOUtil::closeConnection($link);
        return $result;
    }
    public function fetchRoles(){
        $link =PDOUtil::createConnection();
        $query = "SELECT * FROM role WHERE id_role > 1";
        $result = $link->query($query);
        $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'role');
        PDOUtil::closeConnection($link);
        return $result;
    }
}