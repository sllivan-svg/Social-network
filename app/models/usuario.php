<?php

class Usuario
{

    private $db;

    public function __construct()
    {
        $this->db = new Base;
    }

    public function verificarUsuario($datosUsuario)
    {
        $this->db->query('SELECT usuarios FROM usuarios WHERE usuario = :user');
        $this->db->bind(':user', $datosUsuario['usuario']);
        $this->db->execute();
        if ($this->db->rowCount()) {
            return false;
        } else {
            return true;
        }
    }

    public function register($datosUsuario)
    {
        $this->db->query('INSERT INTO usuarios (idPrivilegio , correo , usuario , contrasena) VALUES (:privilegio , :correo , :usuario , :contrasena)');
        $this->db->bind(':privilegio', $datosUsuario['privilegio']);
        $this->db->bind(':correo', $datosUsuario['correo']);
        $this->db->bind(':usuario', $datosUsuario['usuario']);
        $this->db->bind(':contrasena', $datosUsuario['contrasena']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

   
}
