<?php
include "dbase.php";
 $mid = $_POST["pvals"];

$str1 ="DELETE FROM `member` WHERE `member`.`mid` = $mid"; 
   


$rs1 = $bdd->query($str1) or die("Error on $str1");

    echo "Customer deleted successfully";

?>