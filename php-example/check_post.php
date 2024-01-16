<?php


// passes secretly

$name = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$message = $_POST['message'];


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
   // foreach ($_POST as $key => $value){
    //  echo "<h3>$value</h3>";
  //  }

    header('Location: about.php');
    exit;
}




