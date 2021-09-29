<?php
namespace App\Models;

// use CodeIgniter\Database\Query;
use CodeIgniter\Model;

class CrudModel extends Model
{
    public function listarProductos()
    {
        $consulta = $this->db->query("SELECT * FROM tProductos");
        return $consulta->getResult();
    }
}