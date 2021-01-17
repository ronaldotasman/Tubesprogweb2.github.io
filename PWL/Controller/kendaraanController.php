<?php


class kendaraanController
{
    private $dao;
    public function __construct(){
        $this->dao = new kendaraanDAO();
    }
    public function index(){
        $submitpressed = filter_input(INPUT_POST,"btnsubmit");
        if($submitpressed){
            //get data dari form
            $iduser=$_SESSION['session_id'];
            $idkend=filter_input(INPUT_POST,"jenis");
            $noplat=filter_input(INPUT_POST,"noplat");

            //Connect db
            $kend=new kendaraan();
            $kend->setIdUser($iduser);
            $kend->setIdKendaraan($idkend);
            $kend->setNoPlat($noplat);
            $result = $this->dao->add($kend);
            if($result){
                echo 'Data Successfully added';
            }
            else{
                echo 'Error add data';
            }
        }
        $result2 = $this->dao->fetchkendaraan();
        include_once 'kendaraan.php';
    }
}