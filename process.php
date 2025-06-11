<?php
// echo "Welcome " . $_POST["name"] . "<br>";
// echo "Your email is " . $_POST["email"];
function sanitize($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(empty($_POST["name"])){
        echo "Name is required";
    }
    else{
        $name=sanitize($_POST["name"]);
         if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed.";
        }
        echo "NAME IS GOOD";
    }


    //validate the email
    if(empty($_POST["email"])){
        echo "EMAIL REQIURED";
    }
    else{
        echo "email got it";
    }
}
?>
