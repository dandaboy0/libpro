<?php
include "dbase.php";
$vals=$_POST["pvals"];
echo $vals;
print_r($vals);


$str1="select * from member where mid=$vals";
$rs1=$bdd->query($str1) or die("error on $str1");
$row1=$rs1->fetch();

$strj="<script type='text/javascript'>";
$strj.= "$('#mid').val('$row1[0]');";
$strj.="</script>";
echo $strj;

$strj="<script type='text/javascript'>";
$strj.= "$('#cid').val('$row1[1]');";
$strj.="</script>";
echo $strj;

$strj="<script type='text/javascript'>";
$strj.= "$('#mname').val('$row1[2]');";
$strj.="</script>";
echo $strj;

$strj="<script type='text/javascript'>";
$strj.= "$('#madd').val('$row1[3]');";
$strj.="</script>";
echo $strj;

$strj="<script type='text/javascript'>";
$strj.= "$('#mtel').val('$row1[4]');";
$strj.="</script>";
echo $strj;

$strj="<script type='text/javascript'>";
$strj.= "$('#mregdate').val('$row1[5]');";
$strj.="</script>";
echo $strj;

$strj="<script type='text/javascript'>";
$strj.= "$('#mnic').val('$row1[6]');";
$strj.="</script>";
echo $strj;

$strj="<script type='text/javascript'>";
$strj.= "$('#msection').val('$row1[7]');";
$strj.="</script>";
echo $strj;

$strj="<script type='text/javascript'>";
$strj.= "$('#mbdate').val('$row1[8]');";
$strj.="</script>";
echo $strj;

$strj="<script type='text/javascript'>";
$strj.= "$('#mcfirm').val('$row1[9]');";
$strj.="</script>";
echo $strj;

$strj.= "</script>";
echo $strj;
echo "complete";

?>