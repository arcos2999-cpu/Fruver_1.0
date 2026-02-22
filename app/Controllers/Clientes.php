<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Clientemodel;
class Clientes extends Controller{

public function listar(){

$cliente=new clientemodel();
$datos['clientes']=$cliente->orderBy('ID','ASC')->findAll();

return view('cliente/lista_clientes',$datos);
}

}