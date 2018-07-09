
<!DOCTYPE HTML>

<html>
	<head>
		<title>Login form</title>
	</head>
	
	<body>
	
	<?php
	
if (!empty($_POST["ApName"])) {
    //echo "Yes, name is set";   
    $ApName=$_POST["ApName"];	
}
else{  
    $ApName="";
}

if (!empty($_POST["Gname"])) {
    //echo "Yes, name is set";   
    $Gname=$_POST["Gname"];	
}
else{  
    $Gname="";
}

if (!empty($_POST["Sname"])) {
    //echo "Yes, name is set";   
    $Sname=$_POST["Sname"];	
}else{  
    $Sname="";
}



if (!empty($_POST["gender"])) {
    //echo "Yes, name is set";   
    $gender=$_POST["gender"];	
}else{  
    $gender="";
}

if (!empty($_POST["Mname"])) {
    //echo "Yes, name is set";   
    $Mname=$_POST["Mname"];	
}else{  
    $Mname="";
}

if (!empty($_POST["FatherName"])) {
    //echo "Yes, name is set";   
    $FatherName=$_POST["FatherName"];	
}else{  
    $FatherName="";
}






// Set session variables
session_start();
$_SESSION["ApName"] = $ApName;
$_SESSION["Gname"] = $Gname;
$_SESSION["Sname"] = $Sname;
$_SESSION["gender"] = $gender;
$_SESSION["Mname"] = $Mname;
$_SESSION["FatherName"] = $FatherName;
//echo "Session variables are set.";
//$link_address="Stage2.php";
 header("location:Stage2.php");
?>	
			
	
	</body>
</html>

