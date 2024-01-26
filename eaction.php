<?php
if(!isset($_GET['eml_btn'])){
    header('location:index.php');
}
elseif (isset($_GET['eml_btn'])) {
    header('location:mail.php');
}

?>