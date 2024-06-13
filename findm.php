<?php
include "db.php";
$vals=$_POST["pvals"];
//echo $vals;
print_r($vals);


$str1="select * from member where mid=$vals";
$rs1=$bdd->query($str1) or die("error on $str1");
$row1=$rs1->fetch();


$strj="<script type='text/javascript'>";
$strj .="$('#bname').val('$row1[1]');";
$strj .="$('#bno').val('$row1[0]');";
$strj .="$('#bwrite').val('$row1[2]');";
$strj .="$('#bprice').val('$row1[3]');";
$strj .="$('#bdate').val('$row1[4]');";
$strj.="</script>";
echo $strj;

echo "complete";

?>