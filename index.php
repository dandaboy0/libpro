<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css">
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    <title>Library Project</title>
    <!-- <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: linear-gradient(#380036, #0CBABA);
        }

        .containe {
            max-width: 650px;
            padding: 28px;
            margin: 0 28px;
            border-radius: 10px;
            overflow: hidden;
            background: rgba(0, 0, 0, 0.2);
            box-shadow: 0 15px 20px rgba(0, 0, 0, 0.6);
        }

        .h2 {
            font-size: 26px;
            font-weight: bold;
            text-align: left;
            color: #fff;
            padding-bottom: 8px;
            border-bottom: 1px solid silver;
        }

        .content {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 20px;
        }
    </style> -->
</head>

<body>
    <div class="container">
        <form action="" method="post">
            <h2>Loging</h2>
            <div class="content">
                <div class="input-box">
                    <label for="name">MID</label>
                    <input type="number" placeholder="Enter Your Member ID" id="mid" required>
                </div>
            </div>
            <div class="content">
                <div class="input-box">
                    <label for="name">CID</label>
                    <input type="number" placeholder="Enter Your Company ID" id="cid" required>
                </div>
            </div>
            <div class="content">
                <div class="input-box">
                    <label for="name">Member Name</label>
                    <input type="text" placeholder="Enter Your Name" id="mname" required>
                </div>
            </div>
            <div class="content">
                <div class="input-box">
                    <label for="name">Address</label>
                    <input type="text" placeholder="Enter Your Address" id="madd" required>
                </div>
            </div>
            <div class="content">
                <div class="input-box">
                    <label for="name">Tellephon Num</label>
                    <input type="tel" placeholder="Enter ure MIC" id="mtel" required>
                </div>
            </div>
            <div class="content">
                <div class="input-box">
                    <label for="name">Registar Date</label>
                    <input type="date" placeholder="Enter ure MIC" id="mregdate" required>
                </div>
            </div>
            <div class="content">
                <div class="input-box">
                    <label for="name">NIC</label>
                    <input type="tel" placeholder="Enter your National ID Number" id="mnic" required>
                </div>
            </div>
            <div class="content">
                <div class="input-box">
                    <label for="name">Section</label>
                    <!-- <select class="" name="age" required value="" id="msection">
                        <option value="selected hidden">Select Your Section</option>
                        <option value="HR">HR</option>
                        <option value="Admin">Admin</option>
                        <option value="Other">Other</option>
</select> -->
<input type="text" placeholder="Select Your Section" id="msection" required>
                </div>
            </div>
            <div class="content">
                <div class="input-box">
                    <label for="name">Birth Day</label>
                    <input type="date" id="mbdate">
                </div>
            </div>
            <div class="content">
                <lable>Conform</lable>
                <input type="radio" name="conform" value="0" id="mcfirm">NO
                <input type="radio" name="conform" value="1" id="mcfirm">YES

            </div>
            <div class="content">
                <div class="button">
                    <input type="submit" onclick="find()">
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
                    <td><input type="button" value="Edit" class="form-control text-bg-warning"
                            id="<?php echo $row1[0]?>" onclick="findbk(this.id)"></td>
                    <td>
                        <input type="button" value="Delete" class="form-control text-bg-danger"
                            id="<?php echo $row1[0] ?>" onclick="deletebk(this.id)">
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>

</body>
<script type='text/javascript' src='jquery.min.js'></script>
<script type='text/javascript'>
    (document).ready(function () {

    });
    function find() {
        var vals = $("input").map(function () { return $(this).val(); }).get();
        alert("ok");
        $.ajax({
            type: 'post',
            data: { pvals: vals },
            url: 'savem.php',
            success: function (json) { $("#mdata").html(json) }

        });
    }
    function findbk(mid) {
        alert('ok');
        $.ajax({
            type: "post",
            data: { pvals: mid },
            url: "findm.php",
            success: function (json) { $("#mdata").html(json) }
        });
    }
    function deletebk(bno) {
        $.ajax({
            type: "post",
            data: { pvals: bno },
            url: "deletebk.php",
            success: function (json) { $("#mdata").html(json) }
        });
    }

</script>

</html>