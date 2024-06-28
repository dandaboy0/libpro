<?php
include "db.php";
$vals=$_POST["pvals"];
// echo $vals;
print_r($vals);


$str1="select * from member where mid=$vals";
$rs1=$bdd->query($str1) or die("error on $str1");
$row1=$rs1->fetch();


  $strj="<script type='text/javascript'>";
//  $strj.= "$('#mid').val('$row1[0]');";
  $strj.= "$('#cid').val('$row1[1]');";
//  $strj.= "$('#mname ').val('$row1[2]');";
//  $strj.= "$('#madd').val('$row1[3]');";
//  $strj.= "$('#mtel).val('$row1[4]');";
//  $strj.= "$('#mregdate).val('$row1[5]');";
//  $strj.= "$('#mnic).val('$row1[6]');";
//  $strj.= "$('#msec).val('$row1[7]');";
//  $strj.= "$('#mbdate).val('$row1[8]');";
//  $strj.= "$('#mcfirm).val('$row1[9]');";
//  $strj.= "</script>";
//  echo $strj;

echo "complete";

?>

