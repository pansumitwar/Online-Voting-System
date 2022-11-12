<?php
    include("connect.php");

    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $voterid = $_POST['voterid'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $address = $_POST['address'];
    $image = $_FILES['photo']['name'];
    $tmp_name = $_FILES['photo']['tmp_name'];
    $area = $_POST['area'];
    $role = $_POST['role'];

    $check = mysqli_query($connect, "SELECT * FROM user WHERE voterid='$voterid'");

    
    if($name && $mobile && $voterid && $password && $address && $image && $area && $role)
    {   
        if(mysqli_num_rows($check)>0)
        {
            echo '
                    <script>
                    alert("User Already Registered!");
                    window.location = "../routes/login.html";
                    </script>
                    ';
        }
        else
        {
            if($password==$cpassword){
                move_uploaded_file($tmp_name,"../uploads/$image");
                $insert = mysqli_query($connect, "INSERT INTO user (name, mobile, voterid, password, address, photo, area, role, status, votes) VALUES ('$name', '$mobile', '$voterid', '$password', '$address', '$image', '$area','$role', 0, 0)");
                if($insert){
                    echo '
                    <script>
                    alert("Registration Successfull!");
                    window.location = "../routes/login.html";
                    </script>
                    ';
                }
                else{
                    echo '
                    <script>
                    alert("Some Error Occured!");
                    window.location = "../routes/register.html";
                    </script>
                    ';
                }
            }
            else{
                echo '
                    <script>
                    alert("Password and Confirm Password doesnot match!");
                    window.location = "../routes/register.html";
                    </script>
                    ';
    
            }
        }

    }
    else{
        echo '
            <script>
            alert("Please Enter all the details");
            window.location = "../routes/register.html";
            </script>
            ';

    }
?>