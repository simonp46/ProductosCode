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
    public function insertar($datos)
    {
        $data = $this->db->table('tproductos');
        $data->insert($datos);
        return $this->db->insertID();
    }
    public function eliminar($identificacion)
    {
        $Eliminar = $this->db->table('tproductos');
        $Eliminar->where($identificacion);
        return $Eliminar->delete();
    }
}
?>