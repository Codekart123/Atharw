<?php
$pdo = new PDO('mysql:dbname=athraw;user=root;host=localhost;port=3306');
$oper = $_REQUEST['oper'];        
                                          /*fetch*/
if($oper == "1001")
{
	$output = array("aaData" => array());
	$query = "SELECT first_name,last_name,id,contact,email,identification,qualification FROM signup where status = :status AND role_code =:role_code ORDER BY id";
	$res = $pdo->prepare($query);
	$status = 'Active';
	$role_code = "RLTCHR";
	$res->bindParam(":status",$status);
	$res->bindParam(":role_code",$role_code);
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
									/*INSERT*/
else if ($oper == "1002") {
	$output = array("dbStatus" => "","dbMessage" => "");
	$first_name =isset( $_POST['first_name'])?$_POST['first_name']:'';
	$last_name = isset( $_POST['last_name'])?$_POST['last_name']:'';
	$contact = isset( $_POST['contact'])?$_POST['contact']:'';
	$email = isset( $_POST['email'])?$_POST['email']:'';

	$stmt = $pdo->prepare("SELECT * FROM email where email= :email");
	$stmt->execute(['email' => $email]); 
	$data = $stmt->fetchAll();
	// foreach ($data as $row) {
	// 	echo $row['email']."<br />\n";
	// }
	if(count($data) > 1){
		echo "data exists...";
	}

    // images id
    if(getimagesize($_FILES['identification']['tmp_name']) == FALSE){
        echo " Please Select an image";
    }else{
        $idProof =  $_FILES['identification'];
        $idname = $idProof['name'];
        $iderror = $idProof['error'];
        $idtmp = $idProof['tmp_name'];
        $idextension = explode('.',$idname); //sepatare name and extension
        $idchk = strtolower(end($idextension)); // store the extension
    }
    // images qualification
    if(getimagesize($_FILES['qualification']['tmp_name']) == FALSE){
        echo " Please Select an image";
    }else{
        $qualificationProof = $_FILES['qualification'];
        $qualificationname = $qualificationProof['name'];
        $qualificationerror = $qualificationProof['error'];
        $qualificationtmp = $qualificationProof['tmp_name'];
        $dataqual = file_get_contents($qualificationProof['tmp_name']);
        $qualificationextension = explode('.',$qualificationname);
        $qualificationchk = strtolower(end($qualificationextension));    
    }
   
    $extensionStored = array('png','jpg','jpeg','doc','docx','pdf');

    if(in_array($idchk,$extensionStored) && in_array($qualificationchk,$extensionStored)){
        $id_destination_folder = "../UploadDocument/id/".$idname;
        $qualification_destination_folder = "../UploadDocument/qualification/".$qualificationname;
        move_uploaded_file($idtmp,$id_destination_folder);
        move_uploaded_file($qualificationtmp,$qualification_destination_folder);  


	$query = "insert into signup(first_name,last_name,contact,email,password,con_password,identification,qualification,role_code,token,status,teacher_status) values(:first_name,:last_name,:contact,:email,:pass,:cpass,:id,:qual,:role_code,:token,:status,:teacher)";
	$res = $pdo->prepare($query);
	$status = 'Active';
    $token = bin2hex( random_bytes(15));
    $role_code = 'RLTCHR';
    $teacher = 1;
    $password = 'Teacher'.rand(999,9999);
	if ($res) {
		$res->bindParam(":first_name",$first_name);
		$res->bindParam(":last_name",$last_name);
		$res->bindParam(":contact",$contact);
		$res->bindParam(":email",$email);
		$res->bindParam(":qual",$qualification_destination_folder);
		$res->bindParam(":id",$id_destination_folder);
        $res->bindParam(":pass",$password);
        $res->bindParam(":cpass",$password);
        $res->bindParam(":role_code",$role_code);
        $res->bindParam(":token",$token);
        $res->bindParam(":teacher",$teacher);
        $res->bindParam(":status",$status);
	}
	if ($res->execute()) {
		$dbStatus = "SUCCESS";
		$dbMessage = "Thank You! Record has been saved successfully";
		$output = array("dbStatus" => $dbStatus,"dbMessage" => $dbMessage);
	} else {
		$dbStatus = "FAILURE";
		$dbMessage = $res->errorInfo();
		$output = array("dbStatus" => $dbStatus,"dbMessage" => $dbMessage);
	    }
    }

	$pdo = NULL;
	echo json_encode($output);
							
} 						
                                     /*update*/

else if ($oper == "1003") {
	$output = array("dbStatus" => "","dbMessage" => "");
	$first_name =isset( $_POST['first_name'])?$_POST['first_name']:'';
	$last_name = isset( $_POST['last_name'])?$_POST['last_name']:'';
	$contact = isset( $_POST['contact'])?$_POST['contact']:'';
	$email = isset( $_POST['email'])?$_POST['email']:'';
	$hidId = isset( $_POST['hidId'])?$_POST['hidId']:'';
    // images id
    if(getimagesize($_FILES['identification']['tmp_name']) == FALSE){
        echo " Please Select an image";
    }else{
        $idProof =  $_FILES['identification'];
        $idname = $idProof['name'];
        $iderror = $idProof['error'];
        $idtmp = $idProof['tmp_name'];
        // $dataid = file_get_contents($_FILES['id_file']['tmp_name']);
        $idextension = explode('.',$idname); //sepatare name and extension
        $idchk = strtolower(end($idextension)); // store the extension
    }
    // images qualification
    if(getimagesize($_FILES['qualification']['tmp_name']) == FALSE){
        echo " Please Select an image";
    }else{
        $qualificationProof = $_FILES['qualification'];
        $qualificationname = $qualificationProof['name'];
        $qualificationerror = $qualificationProof['error'];
        $qualificationtmp = $qualificationProof['tmp_name'];
        $dataqual = file_get_contents($qualificationProof['tmp_name']);
        $qualificationextension = explode('.',$qualificationname);
        $qualificationchk = strtolower(end($qualificationextension));    
    }

    $extensionStored = array('png','jpg','jpeg','doc','docx','pdf');
    if(in_array($idchk,$extensionStored) && in_array($qualificationchk,$extensionStored)){
        $id_destination_folder = "../UploadDocument/id/".$idname;
        $qualification_destination_folder = "../UploadDocument/qualification/".$qualificationname;
        move_uploaded_file($idtmp,$id_destination_folder);
        move_uploaded_file($qualificationtmp,$qualification_destination_folder);  


	$query = "UPDATE signup SET first_name = :first_name,last_name = :last_name,contact = :contact, email=:email,identification=:idp,qualification=:qual WHERE id = :id";

	$res = $pdo->prepare($query);
	if ($res) {
		$res->bindParam(":first_name",$first_name);
		$res->bindParam(":last_name",$last_name);
		$res->bindParam(":contact",$contact);
		$res->bindParam(":email",$email);
		$res->bindParam(":qual",$qualification_destination_folder);
		$res->bindParam(":idp",$id_destination_folder);
        $res->bindParam(":pass",$password);
        $res->bindParam(":cpass",$password);
        $res->bindParam(":role_code",$role_code);
        $res->bindParam(":token",$token);
        $res->bindParam(":teacher",$teacher);
        $res->bindParam(":status",$status);
		$res->bindParam(":id",$hidId);
	}
	if ($res->execute()) {
		$dbStatus = "SUCCESS";
		$dbMessage = "Thank You! Record has been updated successfully";
		$output = array("dbStatus" => $dbStatus,"dbMessage" => $dbMessage);
	} else {
		$dbStatus = "FAILURE";
		$dbMessage = $res->errorInfo();
		$output = array("dbStatus" => $dbStatus,"dbMessage" => $dbMessage);
	    }
    }
	$pdo = NULL;
	echo json_encode($output);

}
								/*delete*/
else if ($oper == "1004") {
	$output = array("dbStatus" => "","dbMessage" => "");	
	$hidId = isset( $_POST['id'])?$_POST['id']:'';

	$query = "DELETE FROM signup WHERE id = :id";
	$res = $pdo->prepare($query);
	if ($res) {
		$res->bindParam(":id",$hidId);
		}
		if ($res->execute()) {
		$dbStatus = "SUCCESS";
		$dbMessage = "Record has been deleted successfully";
		$output = array("dbStatus" => $dbStatus,"dbMessage" => $dbMessage);
	} else {
		$dbStatus = "FAILURE";
		$dbMessage = $res->errorInfo();
		$output = array("dbStatus" => $dbStatus,"dbMessage" => $dbMessage);
	}
	$pdo = NULL;
	echo json_encode($output);

}
// fetch requested data
else if($oper == "1005")
{
	$output = array("aaData" => array());
	$query = "SELECT first_name,last_name,id,contact,email,identification,qualification FROM signup where status = :status AND role_code =:role_code ORDER BY id";
	$res = $pdo->prepare($query);
	$status = 'Inactive';
	$role_code = "RLTCHR";
	$res->bindParam(":status",$status);
	$res->bindParam(":role_code",$role_code);
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

// approve request
else if ($oper == "1006") {
	$output = array("dbStatus" => "","dbMessage" => "");	
	$hidId = isset( $_POST['id'])?$_POST['id']:'';
	$selectmail = "SELECT * from signup where id=:id AND status='Inactive'";
	$result = $pdo->prepare($selectmail);
	if($result){
		$result->bindParam(':id',$hidId);
	}
	if ($result->execute()) {
		$res = $res->fetchAll();
	    foreach($res as $row){
			$first_name = $row->first_name;
			$last_name = $row ->last_name;
			$id = $row->email;
			$password = $row->password;
		}

		$subject = "Application approval for Atharw teacher..";
		$body = "Dear $first_name'.'$last_name, Here is the approval mail by atharw..Password : ' $password ' and id: ' $id '  ";
		$headers = "From: patrabhagyashree004@gmail.com";
		if(mail($email,$subject,$body,$headers)){
			$query = "UPDATE signup SET status=:status WHERE id = :id";
			$upres = $pdo->prepare($query);
			$status = 'Active';
			if ($upres) {
					$upres->bindParam(":id",$hidId);
					$upres->bindParam(":status",$status);
				}
				if ($upres->execute()) {
				$dbStatus = "SUCCESS";
				$dbMessage = "Record has been approved successfully";
				$output = array("dbStatus" => $dbStatus,"dbMessage" => $dbMessage);
				} else {
					$dbStatus = "FAILURE";
					$dbMessage = $upres->errorInfo();
					$output = array("dbStatus" => $dbStatus,"dbMessage" => $dbMessage);
				}

			header('location: Teachers.php');
		}else{
			echo "Mail sending failed..";
		}

	}
	else {
		$dbStatus = "FAILURE";
		$dbMessage = $upres->errorInfo();
		$output = array("dbStatus" => $dbStatus,"dbMessage" => $dbMessage);
	}

	$pdo = NULL;
	echo json_encode($output);

}


// discard request
else if ($oper == "1007") {
	$output = array("dbStatus" => "","dbMessage" => "");	
	$hidId = isset( $_POST['id'])?$_POST['id']:'';
	$selectmail = "SELECT * from signup where id=:id AND status='Inactive'";
	$result = $pdo->prepare($selectmail);
	if($result){
		$result->bindParam(':id',$hidId);
	}
	if ($result->execute()) {
		$res = $res->fetchAll();
	    foreach($res as $row){
			$first_name = $row->first_name;
			$last_name = $row ->last_name;
			$id = $row->email;
			$password = $row->password;
		}

		$subject = "Application approval for Atharw teacher..";
		$body = "Dear $first_name'.'$last_name, Here is the approval mail by atharw..Password : ' $password ' and id: ' $id '  ";
		$headers = "From: patrabhagyashree004@gmail.com";
		if(mail($email,$subject,$body,$headers)){
			$query = "DELETE FROM signup WHERE id = :id";
			$upres = $pdo->prepare($query);
			if ($upres) {
					$upres->bindParam(":id",$hidId);
				}
				if ($upres->execute()) {
				$dbStatus = "SUCCESS";
				$dbMessage = "Record has been discarded successfully";
				$output = array("dbStatus" => $dbStatus,"dbMessage" => $dbMessage);
				} else {
					$dbStatus = "FAILURE";
					$dbMessage = $upres->errorInfo();
					$output = array("dbStatus" => $dbStatus,"dbMessage" => $dbMessage);
				}

			header('location: Teachers.php');
		}else{
			echo "Mail sending failed..";
		}

	}
	else {
		$dbStatus = "FAILURE";
		$dbMessage = $upres->errorInfo();
		$output = array("dbStatus" => $dbStatus,"dbMessage" => $dbMessage);
	}

	$pdo = NULL;
	echo json_encode($output);


}
?>
