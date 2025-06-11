<?php
session_start();
if($_POST['username']=="admin" && $_POST['password']=="12345"){
    $_SESSION['loggedin']=true;
    echo "Successsful";
}
else{
    echo "not";
}


?>