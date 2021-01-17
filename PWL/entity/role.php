<?php


class role
{
    private $id_role;
    private $name_role;

    /**
     * @return mixed
     */
    public function getIdRole()
    {
        return $this->id_role;
    }

    /**
     * @param mixed $id_role
     */
    public function setIdRole($id_role)
    {
        $this->id_role = $id_role;
    }

    /**
     * @return mixed
     */
    public function getNameRole()
    {
        return $this->name_role;
    }

    /**
     * @param mixed $name_role
     */
    public function setNameRole($name_role)
    {
        $this->name_role = $name_role;
    }
}