<?php 
require '../config.php';  
if(isset($_SESSION["admin_name"])){
    session_destroy();
    header("location:".BUA.'login.php');
}
else{
    header("location:".BU);

}



?>