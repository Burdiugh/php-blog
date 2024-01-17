

<?php
session_start();
?>
<body>
<?php
$title = "main";
require 'blocks/header.php'
?>
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <h1>Main page</h1>

        </div>
    </div>

</div>




<?php
// include file that contains HTML
// //require 'blocks/footer.php'
?>

</body>

<?php
// work with session
//$user_name = "Test_UserName";
//
//$_SESSION['user_name']= $user_name;
//
//if($_SESSION['user_name']=="Test_UserName")
//{
//    echo 'session was set';
//}

// unset($_SESSION['user_name']); - to remove one element in session
// session_destroy(); to remove session completely
?>

<?php
// work with cookie
//$user_name = "Test_UserName";

//setcookie("user_name", $user_name, time() + 180);
//print_r($_COOKIE);

//echo $_COOKIE['user_name'];

?>

<?php
// work with email
//  $message = "Message";
//  $to = "burdiugh.bk@gmail.com";
//  $from = "burdiugh.bk@gmail.com";
//  $subject = "Test sending email";
//
//  $subject = "=?utf-8?B?".base64_encode($subject)."?=";
//  $headers = "From: $from\r\nReply-to: $from\r\nContent-type:text/plain; charset=urf-8\r\n";
//
//  mail($to,$subject, $message, $headers);

?>

<?php
// work with server and url
//phpinfo();

//            echo '<pre>';
//            print_r($_SERVER);
//             echo '</pre>';

//echo $_SERVER['HTTPS'];
//echo $_SERVER['HTTP_HOST'].' - '. $_SERVER['REQUEST_URI'];
//echo $_SERVER['HTTP_USER_AGENT'];

//            if($_GET['source'] != ""){
//                $link = explode("?source=", $_SERVER['REQUEST_URI']);
//                $redirect = "http://".$_SERVER['HTTP_HOST'].$link[0];
//
//                header('HTTP/1.1 301 Moved Permanently');
//                header('Location:'.$redirect);
//                exit();
//            }
?>

<?php
// work with file
// w - write
// a - append
// r - read

//$file = fopen("text.txt","w");
// fwrite($file, "example");
// fclose($file);

 //file_put_contents("text.txt", "example2");
 //echo file_get_contents("text.txt");
// file_exists("text.txt");

// rename(my_file_name, new_file_name);
// unlink(file_name); - to remove any file from the project by its name

// echo __FILE__ - to get current file's name, fileperms(__FILE__) to get permissions of the file
?>


<?php
//work with date
//echo date('y:m:d  H:i:s', strtotime("+2 Hours"))
?>


