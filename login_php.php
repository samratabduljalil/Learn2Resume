<?php
include('connection.php');
session_start();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $email = $_POST['email'];
    $password = $_POST['password'];
    $table = $_POST["sign"];
    
    $query = "SELECT * FROM {$table}  WHERE email = '$email' LIMIT 1";
    $result = mysqli_query($connection, $query);

    if ($result && mysqli_num_rows($result) > 0) {
     
        $user = mysqli_fetch_assoc($result);
        
        
          
           if($table=='cv_admin'){
            $_SESSION['name']=$user['name'];
            $_SESSION['image']=$user['image'];
            $_SESSION['id']=$user['id_user'];
            $_SESSION['admin']=TRUE;
           header("location: \admin\index.php");
           }else{
            $_SESSION['name']=$user['name'];
            $_SESSION['img']=$user['img'];
            $_SESSION['id']=$user['UserID'];
            $_SESSION['image_co']=$user['image_co'];
            $_SESSION['phone']=$user['phone'];
            $_SESSION['about']=$user['about'];
            $_SESSION['address']=$user['address'];
            $_SESSION['position']=$user['position'];


            $_SESSION['edu1']=$user['edu_1'];
            $_SESSION['deg1']=$user['degree_1'];
            $_SESSION['cgpa1']=$user['cgpa_1'];
            $_SESSION['edu2']=$user['edu_2'];
            $_SESSION['deg2']=$user['degree_2'];
            $_SESSION['cgpa2']=$user['cgpa_2'];

            $_SESSION['og1']=$user['c_name_1'];
            $_SESSION['p1']=$user['c_position_1'];
            $_SESSION['y1']=$user['c_year_1'];
            $_SESSION['og2']=$user['c_name_2'];
            $_SESSION['p2']=$user['c_position_2'];
            $_SESSION['y2']=$_POST['c_year_2'];


            $_SESSION['s1']=$user['skills_1'];
            $_SESSION['s2']=$user['skills_2'];
            $_SESSION['s3']=$user['skills_3'];
            $_SESSION['s4']=$user['skills_4'];
            $_SESSION['s5']=$user['skills_5'];
            $_SESSION['s6']=$user['skills_6'];




            $_SESSION['user']=TRUE;
            
          


            header("location: \user2\index.php");
           }
    } else {
        echo "User not found";
    }
}
?>


