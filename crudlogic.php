<?php	 
error_reporting(E_ALL);

$host    = "localhost";
$user    = "root";
$pass    = "";
$db_name = "crud";


$con = mysqli_connect($host, $user, $pass, $db_name);
mysqli_select_db($db_name);
//test if connection failed
if(mysqli_connect_errno()){
    die("Error de conexion: "
        . mysqli_connect_error()
        . " (" . mysqli_connect_errno()
        . ")");
}




//create connection
//$con = new PDO('mysql:host='.$host.';dbname='.$db_name.','.$user.','.$pass);
//$con = new PDO('mysql:host=localhost;dbname=crud','root','');

$page = isset($_GET['p'])?$_GET['p']:'';

if($page=='add'){

	$tdid  = $_POST['tdid'];
	$tdtimezone  = $_POST['tdtimezone'];
	$tddate  = $_POST['tddate '];
	$tdd  = $_POST['tdd'];
	$tdu  = $_POST['tdu'];
	$tdestado  = $_POST['tdestado'];
	$tdmonto  = $_POST['tdmonto'];
	$tduS  = $_POST['tduS'];
	$tdidCuentaContable  = $_POST['tdidCuentaContable'];
	$tdnum  = $_POST['tdnum'];

$sql = "INSERT INTO info(id, f, h, d, u, estado, monto, uS, idCuentaContable, num) VALUES('".$tdid."','".$tdtimezone."','".$tddate."','".$tdd."','".$tdu."','".$tdestado."','".$tdmonto."','".$tduS."','".$tdidCuentaContable."','".$tdnum."');";

//$sql = "INSERT INTO info(id, f, h, d, u, estado, monto, uS, idCuentaContable, num) VALUES('1','f','h','d','u','estado','monto','uS','idCuentaContable','num')";


mysqli_query($con,$sql);

	// $stmt = $con->prepare('INSERT INTO info(id, f, h, d, u, estado, monto, uS, idCuentaContable, num) VALUES(?,?,?,?,?,?,?,?,?,?)');
	// $stmt->bindParam(1,$tdid);
	// $stmt->bindParam(2,$tdtimezone);
	// $stmt->bindParam(3,$tddate);
	// $stmt->bindParam(4,$tdd);
	// $stmt->bindParam(5,$tdu);
	// $stmt->bindParam(6,$tdestado);
	// $stmt->bindParam(7,$tdmonto);
	// $stmt->bindParam(8,$tduS);
	// $stmt->bindParam(9,$tdidCuentaContable);
	// $stmt->bindParam(10,$tdnum);

	if($stmt->execute()){
		echo "Se subio satisfactoriamente";
	}else{
		echo " Hubo un error con la subida";
	}




}



?>