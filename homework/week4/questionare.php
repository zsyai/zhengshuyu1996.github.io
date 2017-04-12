<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <!-- <meta charset="utf-8"/> -->
    <title>Week 5</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="my homepage">
    <meta name="keywords" content="homepage">
    <meta name="author" content="ZhengShuYu">
    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- CSS | STYLE -->
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
    <style type="text/css">
        .Header {
            position: fixed; 
            top: 0px; 
            width: 100%; 
            height: 6%; 
            background-color: rgba(59, 60, 79, 1);
            float: left;
            font-size: 20px;
        }
        .error {
            color: #FF0000;
            font-size: 14px;
        }
    </style>

    <!-- PLUGIN SCRIPTS -->
    <script type="text/javascript" src="../../js/jquery.js"></script>
    <script type="text/javascript" src="../../js/bootstrap.js"></script>
    <!-- END PLUGIN SCRIPTS -->

</head>

<body>
    <div class="Header">
        <div style="height: 100%; width: 100%; margin-left: 20px">
            <a href="week4.html">
                <img src="../../img/yunwen1.png" alt="Back" width="88" height="31"/>
            </a>
        </div>
    </div>
    <div>
        <div class="left-column"></div>
        <div class="mid-column">
            <?php
                include 'check.php';
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if ($name != "" && $email != "" && $gender != "" && $age != "") {
                        if ($nameErr == "" && $emailErr == "" && $ageErr == "") {
                            echo "<br/><div class=\"mycard\">";
                            include 'collect.php';
                            echo "</div>";
                            $name = $email = $gender = $age = "";
                        }
                    }
                }
            ?>
            <br/>
            <div class="mycard" id="container">
                <form id="Form1" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                    <h1>Questionare</h1>
                    <div class="form-group">
                        <label for="inputName">Name</label>
                        <input type="text" class="form-control" id="inputName" name="inputName" placeholder="Enter name" value="<?php if ($nameErr == "") {echo $name;}?>" required="required">
                        <span class="error">*</span>
                        <br/><span class="error"><?php echo $nameErr;?></span>
                    </div>
                    <div class="form-group">
                        <label for="inputAge">Age</label>
                        <input type="text" class="form-control" id="inputAge" name="inputAge" placeholder="Enter age" value="<?php if ($ageErr == "") {echo $age;}?>" required="required">
                        <span class="error">*</span>
                        <br/><span class="error"><?php echo $ageErr;?></span>
                    </div>
                    <div class="form-group">
                        <label for="inputGender">Gender</label>
                        <select class="form-control" id="inputGender" name="inputGender">
                            <option value="male" <?php if($gender == "male")echo "selected=\"selected\"";?> >Male</option>
                            <option value="female" <?php if($gender == "female")echo "selected=\"selected\"";?> >Female</option>
                        </select><span class="error"> *</span>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Email address</label>
                        <input type="text" class="form-control" id="inputEmail" name="inputEmail" placeholder="Enter email" value="<?php if ($emailErr == "") {echo $email;}?>" required="required">
                        <span class="error">*</span>
                        <br/><span class="error"><?php echo $emailErr;?></span>
                    </div>
                    <br/>
                    <div class="form-group">
                        <input type = "submit"  value = "Submit" />
                        <input type = "reset"  value = "Clear Form" />
                    </div>
                </form>
                <h4><a href="list.php">View results</a></h4>
                <br/>
            </div>
            <br/>
        </div>
        <div class="right-column"></div>
    </div>
    <div class="Footer" style="position: fixed; bottom: 0px; width: 100%; height: 6%; background-color: rgba(242, 236, 223, 1); float: left;">
        <!-- <a href="http://jigsaw.w3.org/css-validator/check/referer">
            <img style="border:0;height:100%;float:right;" src="http://jigsaw.w3.org/css-validator/images/vcss" alt="Valid CSS!" />
        </a>
        <a href="http://validator.w3.org/check?uri=referer">
            <img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" style="border:0;height:100%;float:right;" />
        </a> -->
    </div>
</body>
</html>