<?php


class pomController
{
    private $pomDAO;
    public function __construct(){
        $this->pomDAO = new pomDAO();
    }

    public function index(){
        $command= filter_input(INPUT_GET,'cmd');
        if(isset($command) &&$command == 'del'){
            $cid= filter_input(INPUT_GET,'cid');
            if(isset($cid)){
                $result = $this->artistsDAO->deleteActivity($cid);
            }
        }

        $submitpressed = filter_input(INPUT_POST,"btnsubmit");
        if($submitpressed){
            //get data dari form
            $kode = filter_input(INPUT_POST,"kode");
            $alamat = filter_input(INPUT_POST,"alamat");

            //Connect db
            $pom = new pombensin();
            $pom->setKodeNamaPom($kode);
            $pom->setAlamatPom($kode);
            $result = $this->pomDAO->addpom($pom);
            if($result){
                echo 'Data Successfully added';
            }
            else{
                echo 'Error add data';
            }
        }
        $result2 = $this->pomDAO->fetchPom();
        include_once 'pombensin.php';
    }
}