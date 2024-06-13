<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Project</title>
    <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css">
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <style>
        body {
            background-image: url(OIP\ \(2\).jpeg);
            background-repeat: no-repeat;
            height: 100vh;
            background-size: cover; 
        }

        body {
            display: flex;
            justify-content: flex-end;
            align-items: normal;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
            padding-right: 100px;
            /* Optional: Adjust this value to add some padding from the right edge */
        }

        .box {
            width: 50%;
            background: rgba(0, 0, 0, 0.5);
            color: white;
            border: 2px solid #333;
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.9);
            padding: 20px;
        }
    </style> -->


</head>

<body>
<form method="post">
    <div class="box">

        <div class="container">
            <div class="row">
                <div class="col-6 mt-5">
                    <p>
                    <h5>MID</h5>
                    </p>
                </div>
                <div class="col-6 mt-5">
                    <p>
                    <h5>CID</h5>
                    </p>
                </div>

                <div class="col-6">
                    <input type="text" class="form-control border-dark" placeholder="Enter Member ID" name="mid"
                        id="mid" required>
                </div>
                <div class="col-6">
                    <input type="text" class="form-control border-dark" placeholder="Enter Company ID" name="cid"
                        id="cid" required>
                </div>
            </div>

            <div class="row mt-3">

                <div class="col-3">
                    <p>
                    <h5>Member Name</h5>
                    </p>
                </div>

                <div class="col-9">
                    <input type="text" class="form-control border-dark" placeholder="Enter Member Name" name="mname"
                        id="mame" required>
                </div>

            </div>


            <div class="row">
                <div class="col-3">
                    <p>
                    <h5>Address</h5>
                    </p>
                </div>

                <div class="col-9">
                    <input type="text" class="form-control border-dark" placeholder="Enter Address" name="madd"
                        id="madd" required>
                </div>

            </div>


            <div class="row">

                <div class="col-6">
                    <p>
                    <h5>Tellephon Num</h5>
                    </p>
                </div>
                <div class="col-6">
                    <p>
                    <h5>Registar Date</h5>
                    </p>
                </div>
                <div class="col-6">
                    <input type="number" class="form-control border-dark" placeholder="Enter Tell Number" name="mtel"
                        id="mtel" minlength=10>
                </div>
                <div class="col-6">
                    <input type="date" class="form-control border-dark" name="mregdate" id="mregdate" required>
                </div>

            </div>

            <div class="row">

                <div class="col-6">
                    <p>
                    <h5>NIC</h5>
                    </p>
                </div>
                <div class="col-6">
                    <p>
                    <h5>Section</h5>
                    </p>
                </div>

                <div class="col-6">
                    <input type="number" class="form-control border-dark" placeholder="Select your section" name="Select your section" id="Select your section"
                        required>
                </div>
                <div class="col-6">
                    <div class="input-group ">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Options</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01">
                            <option selected>Select Your Section :-</option>
                            <option value="1">HR</option>
                            <option value="2">Admin</option>
                            <option value="3"></option>
                        </select>
                    </div>

                </div>

            </div>

            <div class="row">

                <div class="col-6">
                    <p>
                    <h5>Birth Day</h5>
                    </p>
                </div>
                <div class="col-6"></div>
                <div class="col-6">
                    <input type="date" class="form-control border-dark"  name="mbdate" id="mbdate"
                        required>
                </div>

            </div>
            <div class="row">
                <div class="col-4  mt-5">

                </div>
                <div class="col-4  mt-5">
                    <input type="submit" class=" form-control btn btn-outline-success" onclick="find()" id="mcfirm">
                </div>
                <div class="col-4  mt-5">

                </div>


            </div>


        </div>
    </div>
    </form>
<div id="mdata">............................</div>
    <?php
    include "db.php";
    $str1="SELECT * FROM member order by mid";
    $rs1=$bdd-> query($str1) or die ("erorr on $str1");
    ?>

    <!--Table-->
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
                <td>
                    <?php echo $row1[0]?>
                </td>
                <td>
                    <?php echo $row1[1]?>
                </td>
                <td>
                    <?php echo $row1[2]?>
                </td>
                <td>
                    <?php echo $row1[3]?>
                </td>
                <td>
                    <?php echo $row1[4]?>
                </td>
                <td>
                    <?php echo $row1[5]?>
                </td>
                <td>
                    <?php echo $row1[6]?>
                </td>
                <td>
                    <?php echo $row1[7]?>
                </td>
                <td>
                    <?php echo $row1[8]?>
                </td>
                <td>
                    <?php echo $row1[9]?>
                </td>
                <td><input type="button" value="Edit" class="form-control text-bg-warning" id="<?php echo $row1[0]?>"
                        onclick="findbk(this.id)"></td>
                <td>
                    <input type="button" value="Delete" class="form-control text-bg-danger" id="<?php echo $row1[0] ?>"
                        onclick="deletebk(this.id)">
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>

</body>
<script type='text/javascript' src='jquery.min.js'></script>
<script type='text/javascript'>
    (document).ready(function(){

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
function findbk(bno){
    alert('ok');
    $.ajax({
        type:"post",
        data:{pvals:bno},
        url:"findbk.php",
        success: function(json){$("#mdata").html(json)   }
    });
}
function deletebk(bno){
    $.ajax({
        type:"post",
        data:{pvals:bno},
        url:"deletebk.php",
        success: function(json){$("#mdata").html(json)   }
    });
}

</script>

</html>