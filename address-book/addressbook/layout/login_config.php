<?php
    if(isset($_POST['userlogin'])){
        include 'dbcon.php';
        $useremail =mysqli_real_escape_string($connect,$_POST['useremail']);
        $userpassword =sha1(mysqli_real_escape_string($connect,$_POST['userpass']));
        if($useremail!=null || $userpassword!=null)
        {
            $user_search = "select * from users where U_Email='$useremail' and Password='$userpassword'";
            if(mysqli_num_rows(mysqli_query($connect,$user_search)) > 0){
            session_start();

            $result = mysqli_query($connect,$user_search);
            while($row = mysqli_fetch_array($result)){
                $_SESSION['userid'] = $row['User_id'];
                $_SESSION['username']  = $row['U_Name'];
            }
            $_SESSION["useremail"] = $useremail;
            if($_SESSION["useremail"] == "hunain@gmail.com"){
                header('Location: ../adminindex.php');    
            }
            else{
            header('Location: ../index.php');
            }
            
            }
            else{
                header('Location: ../Login.php?msg=User Not Found');
            }

        }
    }
    else{
        header('Location: ../index.php');
        exit();
    }
    ?>