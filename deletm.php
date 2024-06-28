<?php
include "db.php";
 $mid = $_POST["pvals"];

$str1 ="DELETE FROM member WHERE mid = $mid";

    $rs1 = $bdd->query($str1) or die("Error on $str1");

    echo "Customer deleted successfully";

?>