<?php
include "dbase.php";
$vals=$_POST["pvals"];
echo $vals;
print_r($vals);
$str1="select * from member order by mid desc";
$rs1=$bdd->query($str1)or die("error on $str1");
$row1=$rs1->fetch();
$mid=$row1[0]+1;
if ($vals[9]==0){

    $str1="insert into member values($mid,'$vals[0]','$vals[1]','$vals[2]','$vals[3]','$vals[4]','$vals[5]','$vals[6]','$vals[7]','$vals[8]')";
}
else{

    $str1="UPDATE `member` SET `cid` = '$vals[0]', `mname` = '$vals[1]', `madd` = '$vals[2]', `mtel`='$vals[3]', `mregdate`='$vals[4]', `mnic`='$vals[5]', `msection`='$vals[6]',
     `mbdate`='$vals[7]', `mcfirm`='$vals[8]' WHERE `member`.`mid` = '$vals[9]'";
}



$ts1=$bdd->query($str1) or die('error on $str1');
echo "complete";

?>