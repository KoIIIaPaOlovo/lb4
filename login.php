

<?php
session_start();
if($_POST['yourname']){

$_SESSION['yourname'] = $_POST['yourname'];
}
$referer = $_SERVER['HTTP_REFERER'];
header("Location: $referer");
?>
