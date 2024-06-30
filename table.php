<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <a href="index.php"><---Add New Member</a>
<?php
include "dbase.php";
$str1="SELECT * FROM member order by mid";
$rs1=$bdd-> query($str1) or die ("erorr on $str1");
?>
<!-----------------------------------------------Table----------------------------------->
    <table>
    <thead>
        <tr>
        <th>Member ID</th>
                    <th>Company ID</th>
                    <th>Member Name</th>
                    <th>Address</th>
                    <th>Tellephon num</th>
                    <th>Register Date</th>
                    <th>NIC</th>
                    <th>Section</th>
                    <th>Birth Day</th>
                    <th>Conformatin</th>
                    <th></th>
                    <th></th>
        </tr>
    </thead>
    <tbody>
        <?php while($row1=$rs1->fetch()){ ?>
            <tr>
                <td><?php echo $row1[0]?></td>
                <td><?php echo $row1[1]?></td>
                <td><?php echo $row1[2]?></td>
                <td><?php echo $row1[3]?></td>
                <td><?php echo $row1[4]?></td>
                <td><?php echo $row1[5]?></td>
                <td><?php echo $row1[6]?></td>
                <td><?php echo $row1[7]?></td>
                <td><?php echo $row1[8]?></td>
                <td><?php echo $row1[9]?></td>
                <td><input type="button" value="Edit" class="form-control text-bg-warning" id="<?php echo $row1[0]?>" onclick="findm(this.id)"></td>
                <td>
                    <input type="button" value="Delete" class="form-control text-bg-danger" id="<?php echo $row1[0] ?>" onclick="deletm(this.id)"></td>
            </tr>
        <?php }?>   
    </tbody>
</table>
<?php
    /*
    $stname=$_POST["stname"];echo $stname;
    $stadd=$_POST["stadd"];
    $sttel=$_POST["sttel"];
    $stdob=$_POST["stdob"];

    $strl="insert into student values(102,'#stname','$stadd','$sttel','$stdob')";
    $tsl=$bdd->query($strl)or die("error");
    echo"complete";

    */
    ?>
</body>
</html>