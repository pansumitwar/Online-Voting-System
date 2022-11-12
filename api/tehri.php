<?php
     session_start();
     include("connect.php");

     $check1 = mysqli_query($connect, "SELECT * FROM user WHERE (role=1 OR role=2) AND area=3");
     $userdata1 = mysqli_fetch_all($check1);
     $total1 = count($userdata1);

     $check2 = mysqli_query($connect, "SELECT * FROM user WHERE (role=1 OR role=2) AND area=3 AND status=1");
     $userdata2 = mysqli_fetch_all($check2);
     $total2 = count($userdata2);

     $check3 = mysqli_query($connect, "SELECT * FROM user WHERE (role=1 OR role=2) AND area=3 AND status=0");
     $userdata3 = mysqli_fetch_all($check3);
     $total3 = count($userdata3);
     
     $per = ($total2/$total1)*100;

    ?>

<html>
    <head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tehri</title>
    </head>
    <body align="center">
        <br><br><br><br><br><h1>AREA : TEHRI</h1><br>
        <table border="2" align="center" cellpadding="10px" width="500px" style="background-color: aliceblue; ">
            <tr>
                <th>TOTAL REGISTERED VOTERS</th>
                <th><?php  echo $total1; ?></th>
            </tr>
            <tr>
                <th><font color=green >VOTED </font></th>
                <th><?php  echo $total2; ?></th>
            </tr>
            <tr>
                <th><font color=red >NOT VOTED</font></th>
                <th><?php  echo $total3; ?></th>
            </tr>
            <tr>
                <th>VOTE PERCENT</th>
                <th><font color=blue><?php  echo number_format($per,2); ?></font>%</th>
            </tr>
        </table>
    </body>
</html>