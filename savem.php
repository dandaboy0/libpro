<?php
include "db.php";
$vals=$_POST["pvals"];
echo $vals;
print_r($vals);
$str1="select * from member order by mid desc";
$rs1=$bdd->query($str1)or die("error on $str1");
$row1=$rs1->fetch();
$mid=$row1[0]+1;
if ($vals[0]==0){

    $str1="insert into member values($vals[0],'$vals[1]','$vals[2]','$vals[3]','$vals[4]','$vals[5]','$vals[6]','$vals[7]','$vals[8]','$vals[9]')";
}
else{

    $str1="UPDATE `member` SET `cid` = '$vals[1]', `mname` = '$vals[2]', `madd` = '$vals[3]', `mtel`='$vals[4]', `mregdate`='$vals[5]', `mnic`='$vals[6]', `msection`='$vals[7]',
     `mbdate`='$vals[8]', `mcfirm`='$vals[9]' WHERE `member`.`mid` = '$vals[0]'";
}



$ts1=$bdd->query($str1) or die('error on $str1');
echo "complete";

?>