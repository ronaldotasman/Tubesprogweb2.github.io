<?php


class user
{
    private $id_user;
    private $nama;
    private $username;
    private $password;
    private $role_user;
    private $tgl_lahir;

    /**
     * @return mixed
     */
    public function getTglLahir()
    {
        return $this->tgl_lahir;
    }

    /**
     * @param mixed $tgl_lahir
     */
    public function setTglLahir($tgl_lahir)
    {
        $this->tgl_lahir = $tgl_lahir;
    }



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
    public function getNama()
    {
        return $this->nama;
    }

    /**
     * @param mixed $nama
     */
    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getRoleUser()
    {
        return $this->role_user;
    }

    /**
     * @param mixed $role_user
     */
    public function setRoleUser($role_user)
    {
        $this->role_user = $role_user;
    }



}