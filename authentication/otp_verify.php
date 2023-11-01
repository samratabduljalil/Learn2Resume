<?php
include('connection.php');
session_start();
if(((int)$_POST['OTP2']) === $_SESSION['otp']){
    $encryption_key =12345678912357846958657423654789; 
        $iv = 1596324856795136; 

        $encryption_key_email =12345678912000006958657423654789; 
        $iv_email = 1596324856700000; 
        

    if($_SESSION['check']==='login'){
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];
    $table = $_SESSION["sign"];
    $encrypted_email = openssl_encrypt($email, 'aes-256-cbc', $encryption_key_email, 0, $iv_email);
    $query = "SELECT * FROM {$table}  WHERE email = '{$encrypted_email}'";
    $result = mysqli_query($connection, $query);
    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        
        $decrypted = openssl_decrypt($user['password'], 'aes-256-cbc', $encryption_key, 0, $iv);
        if($decrypted ===  $password){ 
           if($table=='cv_admin'){
           
            $_SESSION['name']=$user['name'];
            $_SESSION['image']=$user['image'];
            $_SESSION['id']=$user['id_user'];
            $_SESSION['admin']=TRUE;
           header("location: \Cvit-CVgenerator\admin\index.php");
           }else{
            $_SESSION['name']=$user['name'];
         
            $_SESSION['email'] = $_SESSION['email'];
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
            $_SESSION['y2']=$user['c_year_2'];
            $_SESSION['s1']=$user['skills_1'];
            $_SESSION['s2']=$user['skills_2'];
            $_SESSION['s3']=$user['skills_3'];
            $_SESSION['s4']=$user['skills_4'];
            $_SESSION['s5']=$user['skills_5'];
            $_SESSION['s6']=$user['skills_6'];
            $_SESSION['user']=TRUE;
        $query = "UPDATE `cv_user` SET `active`=1 WHERE UserID = '{$user['UserID']}'";
            $result = mysqli_query($connection, $query);
            $_SESSION['non']=true;
            header("location: \Cvit-CVgenerator\user2\index.php");
        }}else{echo "error;";
        
        echo "decript".$decrypted;
        echo "pass".$password;
        
        } } else {
        echo "User not found";
        header("location: login.php");
        }}}else{
        $name = $_SESSION["name"];
        $email = $_SESSION['email'];
        $password = $_SESSION['password'];
        $table = $_SESSION["sign"];
        $encrypted = openssl_encrypt($password, 'aes-256-cbc', $encryption_key, 0, $iv);
        $encrypted_email = openssl_encrypt($email, 'aes-256-cbc', $encryption_key_email, 0, $iv_email);
        $query = "INSERT INTO {$table}( name, email, password) VALUES ('{$name}', '{$encrypted_email}', '{$encrypted}')";
        if (mysqli_query($connection, $query)) {
            header("location: login.php");
         } else {
            echo "Error inserting data: " . mysqli_error($connection);
        }
        
    
        }}else{

$_SESSION['exist']=True;
    header("location: login.php");
}












?>


