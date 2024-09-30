<?php
ob_start();
?>
<?php include("include/connection.php");

?>
<?php
 $_SESSION['adminname']='';
 $_SESSION['id']='';
 header("location: index.php");
?>

<?php
ob_flush();
?>