<?php

$conn = new mysqli("localhost", "root", "", "learnphp");

// print_r($_SERVER);

if ($_SERVER["REQUEST_METHOD"] == "POST" && $_GET["message"]){
    
    $useraname =  $_POST["fname"];
    $emaiad = $_POST["email"];
    $p_num = $_POST["pnumber"];
    $mesage = $_POST["msg"];

    $updating_email = $_GET['message'];

    $q = "update contact_us set full_name = '$useraname', email_address = '$emaiad', phone_number = '$p_num', Message = '$mesage' where email_address = '$updating_email'";

    $conn->query($q);

    header("Location: datashowing.php");
}

else if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $useraname =  $_POST["fname"];
    $emaiad = $_POST["email"];
    $p_num = $_POST["pnumber"];
    $mesage = $_POST["msg"];

    $file_name = $_FILES["myimg"]["name"];
    $tmp_nm = $_FILES["myimg"]["tmp_name"];

    $path = "uploads/".$file_name;

    move_uploaded_file($tmp_nm, $path);

    $q = "insert into contact_us values('$useraname', '$emaiad', '$p_num', '$mesage', '$path')";

    $conn->query($q);

    header("Location: datashowing.php");
}




else if ($_SERVER["REQUEST_METHOD"] == "GET" && $_GET["delete_id"]){
    
    $user_email =  $_GET["delete_id"];

    $q = "delete from contact_us where email_address = '$user_email'";

    $conn->query($q);

    header("Location: datashowing.php");
}

?>