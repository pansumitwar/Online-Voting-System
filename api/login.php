<?php
    session_start();
    include("connect.php");

    $voterid = $_POST['voterid'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $check = mysqli_query($connect, "SELECT * FROM user WHERE voterid='$voterid' AND password='$password' AND role='$role' ");

    if(mysqli_num_rows($check)>0)
    {
        $userdata = mysqli_fetch_array($check);
        $area = $userdata['area'];
        $groups = mysqli_query($connect, "SELECT * FROM user WHERE role=2 AND $area=area");
        $groupsdata = mysqli_fetch_all($groups, MYSQLI_ASSOC);

        $_SESSION['userdata'] = $userdata;
        $_SESSION['groupsdata'] =$groupsdata;

        echo '
        <script>
          window.location = "../routes/dashboard.php";
        </script>
    ';

    }

    else
    
    {
        echo '
        <script>
        alert("Invalid Credentials or User not Found!");
        window.location = "../routes/login.html";
        </script>
    ';

    }

?>