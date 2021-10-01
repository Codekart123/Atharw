<?php
$pdo = new PDO('mysql:dbname=athraw;user=root;host=localhost;port=3306');
$oper = $_REQUEST['oper'];      

if($oper == "1001")
{
	$output = array("aaData" => array());
	$query = "SELECT board_code,id,board_name FROM board where status = :status ORDER BY id";
	$res = $pdo->prepare($query);
	$status = 1;
	$res->bindParam(":status",$status);
	$slno =1;
	if($res->execute())
	{
		
	    $result = $res->fetchAll();
	    foreach($result as $row){
			array_unshift($row,$slno);
			$output['aaData'][] = $row;
			$slno++;
		}
		
	}
	$pdo = NULL;
	echo json_encode($output);
}
                             
?>