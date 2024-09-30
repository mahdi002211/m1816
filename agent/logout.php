<?php
ob_start();
?>
<?php include("include/connection.php");

?>
<?php
 $_SESSION['agentname']='';
 $_SESSION['agentid']='';
 header("location: index.php");
?>

<?php
ob_flush();
?>