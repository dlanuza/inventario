<?php
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') 
{
	class Autocompletar
{
 
	private $dbh;
 
	public function __construct()
	{
<<<<<<< HEAD
		$this->dbh = new PDO("mysql:host=mysql.hostinger.es;dbname=u608912532_bd", "u608912532_root", "123456");
=======
		$this->dbh = new PDO("mysql:host=localhost;dbname=inventario", "root", "");
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
	}
 
	public function findData($search)
	{
	 $query = $this->dbh->prepare("SELECT * FROM producto
                WHERE producto.nombre_producto LIKE :search LIMIT 5");
        $query->execute(array(':search' => '%'.$search.'%'));
        $this->dbh = null;
        if($query->rowCount() > 0)
        {
          echo json_encode(array('res' => 'full', 'data' => $query->fetchAll()));
        }
        else
        {
           echo json_encode(array('res' => 'empty'));
        }
	}
}
<<<<<<< HEAD
 
=======
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
	$search = $_POST["buscar"];
	$autocompletar = new Autocompletar();
	$autocompletar->findData($search);
}