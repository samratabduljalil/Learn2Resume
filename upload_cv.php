<?php
$phone= $_POST['phone'];
$name= $_POST['name'];
$address=$_POST['address'];
$email=$_POST['email'];
$acchivement1=$_POST['acchivement1'];
$shor1=$_POST['shor1'];
$acchivement2=$_POST['acchivement2'];
$shor2=$_POST['shor2'];
$acchivement3=$_POST['acchivement3'];
$shor3=$_POST['shor3'];
$Company1=$_POST['Company1'];
$c_date1=$_POST['c_date1'];
$Company2=$_POST['Company2'];
$c_date2=$_POST['c_date2'];
$re_name1=$_POST['re_name1'];
$re_position1=$_POST['re_position1'];
$re_name2=$_POST['re_name2'];
$re_position2=$_POST['re_position2'];
$soft_s=$_POST['soft_s'];
$hard_s=$_POST['hard_s'];
$other_s=$_POST['other_s'];
$degree1=$_POST['degree1'];
$university1=$_POST['university1'];
$degree2=$_POST['degree2'];
$university2=$_POST['university2'];
$_100wrd=$_POST['100wrd'];

session_start();


include('connection.php');


$targetFile;

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image'])) {
    $uploadDirectory = 'img/'; // Directory where images will be stored

    // Validate the uploaded file
    $allowedExtensions = array('jpg', 'jpeg', 'png', 'gif');
    $fileExtension = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));

    if (!in_array($fileExtension, $allowedExtensions)) {
        die('Error: Invalid file format. Only JPG, JPEG, PNG, and GIF images are allowed.');
    }

    // Create the upload directory if it doesn't exist
    if (!is_dir($uploadDirectory)) {
        mkdir($uploadDirectory, 0777, true);
    }

    $targetFile = $uploadDirectory . basename($_FILES['image']['name']);



    // Move the uploaded file to the upload directory
    if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
        echo "Image uploaded successfully.";
    } else {
        echo "Error: Image upload failed.";
    }
}





$query = "INSERT INTO `cv_template`( `name`, `phone`, `eamil`, `address`, `degree1`, `degree2`,  `edu_institution1`, `edu_institution2`,  `skill1`, `skill2`, `skill3`, `why`,  `company1`, `company2`,  `Cdate1`, `Cdate2`,  `refer_name1`, `refer_name2`,  `refer_dg1`, `refer_dg2`,  `achivment1`, `achivment2`, `achivment3`,  `achivment1_short`, `achivment2_short`, `achivment3_short`,`user_id`,`image`) VALUES ('{$name}','{$phone}','{$email}','{$address}','{$degree1}','{$degree2}','{$university1}','{$university2}','{$soft_s}','{$hard_s}','{$other_s}','{$_100wrd}','{$Company1}','{$Company2}','{$c_date1}','{$c_date2}','{$re_name1}','{$re_name2}','{$re_position1}','{$re_position2}','{$acchivement1}','{$acchivement2}','{$acchivement3}','{$shor1}','{$shor2}','{$shor3}','{$_SESSION['id']}','{$targetFile}')";


if (mysqli_query($connection, $query)) {
    header("location: wait.php");
 } else {
    echo "Error inserting data: " . mysqli_error($connection);
 }
?>