<?php
    session_start();
    if(!isset($_SESSION['userdata'])){
        header("location: login.html");
    }
    $userdata = $_SESSION['userdata'];
    $groupsdata = $_SESSION['groupsdata'];

    if ($_SESSION['userdata']['status']==0) {
        $status = '<b style="color:red"> NOT VOTED </b>';
    } else {
        $status = '<b style="color:green"> VOTED </b>';
    }

    if($_SESSION['userdata']['area']==1){
        $uarea = '<b>Srinagar</b>';}
    elseif($_SESSION['userdata']['area']==2){
        $uarea = '<b>Pauri</b>';}
    else{
        $uarea = '<b>Tehri</b>';}
    

?>

<html>
    <head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>VOTING SYSTEM - DASHBOARD</title>
        <script src="../javascript/dashboard.js"></script>
        <link rel="stylesheet" href="../css/style.css">
        <style>
            #Profile
            {
                background-color: cornsilk;
                width: 30%;
                padding: 20px;
                float: left;
                margin-left: 10px;
                margin-top: 20px;
            }

            #Group
            {
                background-color: cornsilk;
                width: 45%;
                padding: 20px;
                float: right;
                margin-right: 10px;
                margin-top: 20px;
            }
            #votebtn
            {
                display:inline-block;
                font-size: 1.5em;
                padding:0.35em 1.2em;
                border:0.1em solid black;
                margin:0 0.3em 0.3em 0;
                border-radius:0.12em;
                box-sizing: border-box;
                text-decoration:none;
                font-family:'Roboto',sans-serif;
                background-color: #3498db;;
                font-weight:300;
                color:antiquewhite;
                text-align:center;
                transition: all 0.2s;
                cursor: pointer;
            }
            #voted
            {
                display:inline-block;
                font-size: 1.5em;
                padding:0.35em 1.2em;
                border:0.1em solid black;
                margin:0 0.3em 0.3em 0;
                border-radius:0.12em;
                box-sizing: border-box;
                text-decoration:none;
                font-family:'Roboto',sans-serif;
                background-color: green;;
                font-weight:300;
                color:antiquewhite;
                text-align:center;
                transition: all 0.2s;
            }
            #backbtn
            {
                padding: 5px;
                border-radius: 5px;
                background-color: #3498db;
                color: white;
                border-radius: 5px;
                float: left;
                margin: 10px;
                cursor: pointer;
                
            }
            #logbtn
            {
                padding: 5px;
                border-radius: 5px;
                background-color: #3498db;
                color: white;
                border-radius: 5px;
                float: right;
                margin: 10px;
                cursor: pointer;
            }

            @media(max-width:700px)
            {
                #Profile,#Group
                {
                    width:70%;
                    padding: 30px;
                    float: left;
                    margin: 10px;
                }
            }
        </style>
    </head>
    <body>
        <a href="../routes/login.html"> <button id="backbtn"> Back</button></a>
        <a href="logout.php"> <button id="logbtn"> Logout</button></a><br><br><br>
        <div id="headersection"> <h1>ONLINE VOTING SYSTEM</h1></div>
        <hr size="7" color="#ee00dd">


        <div id="Profile" style="text-align:left">
             <center><img src="../uploads/<?php echo $userdata['photo']?>" height="200px" width="180px" onmousemove="bigimg(this)" onmouseout="normalimg(this)"></center><br><br>
            <b>Name : <?php echo $userdata['name']?></b><br><br>
            <b>Mobile : <?php echo $userdata['mobile']?></b><br><br>
            <b>Address : <?php echo $userdata['address']?></b><br><br>
            <b>Enrollment No. : <?php echo $userdata['voterid']?></b><br><br>
            <b>Area : <?php echo $uarea?></b><br><br>
            <b>Status : <?php echo $status?></b><br><br>

            <?php
                if ($_SESSION['userdata']['status']==0) {?>
                    <center><img src="../vote/before.jpg" height="200px" width="180px" onmousemove="bigimg(this)" onmouseout="normalimg(this)"></center>
                <?php } else {?>
                    <center><img src="../vote/after.jpg" height="200px" width="180px" onmousemove="bigimg(this)" onmouseout="normalimg(this)"></center>
               <?php }
            ?>

        </div>


        <div id="Group" style="text-align: left;">
            <?php
            
                if($_SESSION['groupsdata'])
                {
                    for($i=0;$i<count($groupsdata);$i++)
                    {
                        if($groupsdata[$i]['area']==1){
                            $garea = '<b>Srinagar</b>';}
                        elseif($groupsdata[$i]['area']==2){
                            $garea = '<b>Pauri</b>';}
                        else{
                            $garea = '<b>Tehri</b>';}
                        ?>
                        <div>
                            <img style="float: right;" src="../uploads/<?php echo $groupsdata[$i]['photo'] ?>" height="150px" width="150px" onmousemove="bigimgg(this)" onmouseout="normalimgg(this)"><br><br>
                            <b>Group Name : <?php echo $groupsdata[$i]['name']?></b><br><br>
                            <b>Area : <?php echo $garea?></b><br><br>

                            <form action="../api/vote.php" method="POST">
                                <input type="hidden" name="gvotes" value="<?php echo $groupsdata[$i]['votes']?>">
                                <input type="hidden" name="gid" value="<?php echo $groupsdata[$i]['id']?>">
                                <?php
                                    if($_SESSION['userdata']['status']==0)
                                    {?>
                                        <input type="submit" name="votebtn" value="vote" id="votebtn">
                                        <?php
                                    }
                                    else
                                    {
                                        ?>
                                        <button disabled type="button" name="votebtn" value="vote" id="voted">Voted</button>
                                        <?php
                                    }
                                ?>
                                
                            </form>
                        </div>
                            <hr size="7" color="#ee00dd">
                        
                        <?php
                    }
                }

                else
                {

                }

            ?>
        </div>
    </body>
</html>