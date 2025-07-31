<?php


$conn = new mysqli("localhost", "root", "", "learnphp");

// print_r($_SERVER);

if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["dlt"] == "dlt"){

    $c_id = $_POST["card_id"];
    
    $qry = "Delete from contact_us_data where record_id = $c_id";
    
    $conn->query($qry);

    header("Location: showinfo.php");

}


else if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $full_n = $_POST["f_name"];
    $em = $_POST["email"];
    $p_n = $_POST["p_num"];
    $mg = $_POST["msg"];


    $q = "insert into contact_us_data (full_name, email_id, phone_number, message)values ('$full_n', '$em', '$p_n', '$mg')";

    $conn->query($q);

    // echo "data savved sucessfullyyy in database";

    header("Location: showinfo.php");

}



?>