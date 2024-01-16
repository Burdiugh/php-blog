<?php


// shown in url !!!

$name = $_GET['username'];
$email = $_GET['email'];
$password = $_GET['password'];
$message = $_GET['message'];


if(trim($name)==""){
    echo "Name is required";
}
else if(strlen(trim($name)) < 3){
    echo "Name is supposed to contain more than 2 letters.";
}
else if(trim($email)=="" || trim($password)=="" || trim($message)==""){
    echo "Fill in all fields";
}
else{
    //$password = md5($password);
    // foreach ($_GET as $key => $value){
    //  echo "<h3>$value</h3>";
    //  }

    header('Location: about.php');
    exit;
}