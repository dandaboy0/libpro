<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <form method="post">
    <div class="col-10 bg-outline-warning"><center>
        <h2>Login</h2>
    <div class="container mt-3">
    
        <!------------------------------------ Company ID -->
        <div class="row">
        <div class="col-4">
        <p><h5>CID</h5></p>
        </div>
        <div class="col-8">
        <input type="number" class="form-control border-dark" placeholder="Enter Your Company ID" name="cid" id="cid">
        </div>
        </div>
        <!-------------------------------------- Member Name -->
        <div class="row">
        <div class="col-4">
        <p><h5>Member Name</h5></p>
        </div>
        <div class="col-8">
        <input type="text" class="form-control border-dark" placeholder="Enter Your Name" name="mname" id="mname">
        </div>
        </div>
        <!-----------------------Address-->
        <div class="row">
        <div class="col-4">
        <p><h5>Address</h5></p>
        </div>
        <div class="col-8">
        <input type="text" class="form-control border-dark" placeholder="Enter Your Address" name="madd" id="madd">
        </div>
        </div>
        <!---------------------------------- Telephone Num -->
        <div class="row">
        <div class="col-4">
        <p><h5>Telephone Num</h5></p>
        </div>
        <div class="col-8">
        <input type="number" class="form-control border-dark" placeholder="Enter Your Tel Num" name="mtel" id="mtel" minlength=10 >
        </div>
        </div>
        <!------------------------------ Registar Date -->
        <div class="row">
        <div class="col-4">
        <p><h5>Registar Date</h5></p>
        </div>
        <div class="col-8">
        <input type="date" class="form-control border-dark" name="mregdate" id="mregdate">
        </div>
        </div>
        <!------------------------------ NIC -->
        <div class="row">
        <div class="col-4">
        <p><h5>NIC</h5></p>
        </div>
        <div class="col-8">
        <input type="number" class="form-control border-dark" placeholder="Enter Your NIC" name="mnic" id="mnic">
        </div>
        </div>
        <!------------------------------ Section -->
        <div class="row">
        <div class="col-4">
        <p><h5>Section</h5></p>
        </div>
        <div class="col-8">
        <input type="text" class="form-control border-dark" placeholder="Enter Your Section" name="msection" id="msection">
        </div>
        </div>
        <!------------------------------ Birth Day -->
        <div class="row">
        <div class="col-4">
        <p><h5>Birth Day</h5></p>
        </div>
        <div class="col-8">
        <input type="date" class="form-control border-dark"  name="mbdate" id="mbdate">
        </div>
        </div>
        <!------------------------------ Conform -->
        <div class="row">
        <div class="col-4">
        <p><h5>Conform</h5></p>
        </div>
        <div class="col-8">
        <input type="num" class="form-control border-dark"  name="mcfirm" id="mcfirm" value="0">
        </div>
        </div>

        <!---------------------------- Member ID -->
        <!-- <div class="row">
        <div class="col-4">
        <p><h5>MID</h5></p>
        </div> -->
        <div class="col-4">
        <input type="number" class=" form-control border-dark "  name="mid" id="mid" value="0" >
        </div>
        </div>

        <!------------------------------button------------------------------->
        <div class="row">
            <div class="col-2">
            </div>
            <div class="col-3">
                <input type="button" value="New" class="form-control btn btn-primary" name="stsave" onclick="window.location.reload()">
            </div>
            <div class="col-2">

            </div>
            <div class="col-3">
                <input type="button" value="save" class="form-control btn btn-success" id="find2"onclick="find()">
            </div>
            <div class="col-2">

            </div>
        </div>
        <div class="row mt-2"></div>
        </div>
    </center> 
    </div>

    </form>
<div id="mdata">................</div>
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
<script type='text/javascript' src='jquery.min.js'></script>
<script type='text/javascript'>
$(document).ready(function(){

});
function find(){
    var vals = $("input").map(function(){return $(this).val();}).get();
    alert("ok");
      $.ajax({
       type:'post',
       data:{pvals:vals   },
       url:'savem.php',
       success:function (json){$("#mdata").html(json)   }

     });
}
function findm(mid){
    alert('ok');
    $.ajax({
        type:"post",
        data:{pvals:mid},
        url:"findm.php",
        success: function(json){$("#mdata").html(json)   }
    });
}
function deletm(mid){
    $.ajax({
        type:"post",
        data:{pvals:mid},
        url:"deletm.php",
        success: function(json){$("#mdata").html(json)   }
    });
}
</script>
</html>