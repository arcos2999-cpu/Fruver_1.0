<?php 
namespace App\Models;

use CodeIgniter\Model;

class Clientemodel extends Model{
    protected $table      = 'cliente';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'ID';
    protected $allowedFields = ['NOMBRE','APELLIDO','CALLE','COLONIA','NUMERO','RFG','TIPO_CLIENTE','TELEFONO','TIPO_CREDITO'];
}