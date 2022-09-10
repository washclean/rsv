<?php
// database connection code
if(isset($_POST['nui']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','doc');

// get the post records
$np = $_POST['np'];
$dt = $_POST['dt'];
$llsi = $_POST['llsi'];
$nui = $_POST['nui'];
$es = $_POST['es'];
$ad = $_POST['ad'];
$qi = $_POST['qi'];
$llm = $_POST['llm'];
$nmm = $_POST['nmm'];
$smm = $_POST['smm'];
$ak = $_POST['ak'];
$llma = $_POST['llma'];
$smqa = $_POST['smqa'];
$va = $_POST['va'];
$llki = $_POST['llki'];
$nki = $_POST['nki'];
$vm = $_POST['vm'];
$nkth = $_POST['nkth'];
$llme = $_POST['llme'];
$sme = $_POST['sme'];
$cve = $_POST['cve'];
$vi = $_POST['vi'];
$llmo = $_POST['llmo'];
$smo = $_POST['smo'];
$cveo = $_POST['cveo'];
$vd = $_POST['vd'];
$llkk = $_POST['llkk'];
$nkk = $_POST['nkk'];

// database insert SQL code
$sql = "INSERT INTO `home` (`np`,`dt`,`llsi`,`nui`,`es`,`ad`,`qi`,`llm`,`nmm`,`smm`,`ak`,`llma`,`smqa`,`va`,`llki`,`nki`,`vm`,`nkth`,`llme`,`sme`,`cve`,`vi`,`llmo`,`smo`,`cveo`,`vd`,`llkk`,`nkk`) VALUES ('$np','$dt','$llsi','$nui','$es','$as','$qi','$llm','$nmm','$smm','$ak','$llma','$smqa','$va','$llki','$nki','$vm','$nkth','$llme','$sme','$cve','$vi','$llmo','$smo','$cveo','$vd','$llkk','$nkk')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted";
}
{
	header("Location: home.html");
}
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>


