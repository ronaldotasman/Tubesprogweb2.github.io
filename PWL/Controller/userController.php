<?php


class userController{
    private $login;
    public function __construct(){
        $this->login = new userDAO();
    }
    public function index(){
        $signInPressed = filter_input(INPUT_POST,'btnSignIn');
        if($signInPressed){
            $username = filter_input (INPUT_POST,'txtUsername');
            $password = filter_input (INPUT_POST,'txtPassword');
            $md5Password = md5($password);
            $user= new user();
            $user->setUsername($username);
            $user->setPassword($md5Password);
            $result=$this->login->login($user);
            if($result != null && $result['username']==$username){
                $_SESSION['my_session'] = true;
                $_SESSION['session_user']= $result['nama'];
                $_SESSION['session_role']= $result['role_user'];
                $_SESSION['session_id']= $result['id_user'];
                header("location:index.php");
            }
            else{
                echo '<div class="bg-error">Invalid username or password</div>';
            }
        }
        include_once 'login_page.php';
    }
    public function signup(){
        $RegisterInPressed = filter_input(INPUT_POST,'btnsubmit');
        if($RegisterInPressed){
            $name = filter_input (INPUT_POST,'name');
            $username = filter_input (INPUT_POST,'username');
            $password = filter_input (INPUT_POST,'password');
            $role = filter_input (INPUT_POST,'idrole');
            $birth = filter_input (INPUT_POST,'date');
            $md5Password = md5($password);
            $user= new user();
            $user->setNama($name);
            $user->setUsername($username);
            $user->setPassword($md5Password);
            $user->setTglLahir($birth);
            $user->setRoleUser($role);

            $result=$this->login->register($user);
            if ($result!=0) {
                echo '<div class="bg-success">Data successfully added (Title : ' . $user->getNama() . ')</div>';
                header("location:index.php");
            } else {
                echo '<div class="bg-error">Error Add Data</div>';
                header("location:index.php?navito=register");
            }
        }
        $result=$this->login->fetchdata();
        include_once 'register.php';

    }
    public function logout()
    {
        session_unset();
        session_destroy();
        header("location:index.php");
    }
}