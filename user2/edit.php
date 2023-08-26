<?php


session_start();




include('connection.php');


$targetFile1;
$targetFile2;

// Check if the form was submitted
if ( !$_FILES['co_img']['name']==NULL) {
    $uploadDirectory = 'upload/'.rand(); // Directory where images will be stored
    echo "cow12.".$_FILES['co_img']['name'];
    // Validate the uploaded file
    $allowedExtensions = array('jpg', 'jpeg', 'png', 'gif');
   
    $fileExtension1 = strtolower(pathinfo($_FILES['co_img']['name'], PATHINFO_EXTENSION));

    if (!in_array($fileExtension1, $allowedExtensions) ) {
        die('Error: Invalid file format. Only JPG, JPEG, PNG, and GIF images are allowed.');
    }

    // Create the upload directory if it doesn't exist
    // if (!is_dir($uploadDirectory)) {
    //     mkdir($uploadDirectory, 0777, true);
    // }

  
    $targetFile1 = $uploadDirectory . basename($_FILES['co_img']['name']);


    // Move the uploaded file to the upload directory
    if ((move_uploaded_file($_FILES['co_img']['tmp_name'], $targetFile1))) {
        echo "Image uploaded successfully.";
    } else {
        echo "Error: Image upload failed.";
    }





    $query="UPDATE `cv_user` SET `phone`='{$_POST['phone']}',`position`='{$_POST['position']}',`edu_1`='{$_POST['edu1']}',`edu_2`='{$_POST['edu2']}',`degree_1`='{$_POST['deg1']}',`degree_2`='{$_POST['deg2']}',`cgpa_1`='{$_POST['cgpa1']}',`cgpa_2`='{$_POST['cgpa2']}',`c_name_1`='{$_POST['og1']}',`c_name_2`='{$_POST['og2']}',`c_position_1`='{$_POST['p1']}',`c_position_2`='{$_POST['p2']}',`c_year_1`='{$_POST['y1']}',`c_year_2`='{$_POST['y2']}',`skills_1`='{$_POST['s1']}',`skills_2`='{$_POST['s2']}',`skills_3`='{$_POST['s3']}',`skills_4`='{$_POST['s4']}',`skills_5`='{$_POST['s5']}',`skills_6`='{$_POST['s6']}',`about`='{$_POST['about']}',`address`='{$_POST['address']}',`image_co`='{$targetFile1}' WHERE UserID = {$_SESSION['id']}";
    $result = mysqli_query($connection, $query);
}
if ( !$_FILES['pro_img']['name']==NULL) {
    $uploadDirectory = 'upload/'.rand(); // Directory where images will be stored
    echo "cow2 .";
    // Validate the uploaded file
    $allowedExtensions = array('jpg', 'jpeg', 'png', 'gif');
  
    $fileExtension2 = strtolower(pathinfo($_FILES['pro_img']['name'], PATHINFO_EXTENSION));

    if (!in_array($fileExtension2, $allowedExtensions)) {
        die('Error: Invalid file format. Only JPG, JPEG, PNG, and GIF images are allowed.');
    }

    // Create the upload directory if it doesn't exist
    // if (!is_dir($uploadDirectory)) {
    //     mkdir($uploadDirectory, 0777, true);
    // }

    $targetFile2 = $uploadDirectory . basename($_FILES['pro_img']['name']);
   


    // Move the uploaded file to the upload directory
    if ((move_uploaded_file($_FILES['pro_img']['tmp_name'], $targetFile2))) {
        echo "Image uploaded successfully.";
    } else {
        echo "Error: Image upload failed.";
    }





    $query="UPDATE `cv_user` SET `phone`='{$_POST['phone']}',`position`='{$_POST['position']}',`edu_1`='{$_POST['edu1']}',`edu_2`='{$_POST['edu2']}',`degree_1`='{$_POST['deg1']}',`degree_2`='{$_POST['deg2']}',`cgpa_1`='{$_POST['cgpa1']}',`cgpa_2`='{$_POST['cgpa2']}',`c_name_1`='{$_POST['og1']}',`c_name_2`='{$_POST['og2']}',`c_position_1`='{$_POST['p1']}',`c_position_2`='{$_POST['p2']}',`c_year_1`='{$_POST['y1']}',`c_year_2`='{$_POST['y2']}',`skills_1`='{$_POST['s1']}',`skills_2`='{$_POST['s2']}',`skills_3`='{$_POST['s3']}',`skills_4`='{$_POST['s4']}',`skills_5`='{$_POST['s5']}',`skills_6`='{$_POST['s6']}',`img`='{$targetFile2}',`about`='{$_POST['about']}',`address`='{$_POST['address']}' WHERE UserID = {$_SESSION['id']}";
    $result = mysqli_query($connection, $query);

}
$query="UPDATE `cv_user` SET `phone`='{$_POST['phone']}',`position`='{$_POST['position']}',`edu_1`='{$_POST['edu1']}',`edu_2`='{$_POST['edu2']}',`degree_1`='{$_POST['deg1']}',`degree_2`='{$_POST['deg2']}',`cgpa_1`='{$_POST['cgpa1']}',`cgpa_2`='{$_POST['cgpa2']}',`c_name_1`='{$_POST['og1']}',`c_name_2`='{$_POST['og2']}',`c_position_1`='{$_POST['p1']}',`c_position_2`='{$_POST['p2']}',`c_year_1`='{$_POST['y1']}',`c_year_2`='{$_POST['y2']}',`skills_1`='{$_POST['s1']}',`skills_2`='{$_POST['s2']}',`skills_3`='{$_POST['s3']}',`skills_4`='{$_POST['s4']}',`skills_5`='{$_POST['s5']}',`skills_6`='{$_POST['s6']}',`about`='{$_POST['about']}',`address`='{$_POST['address']}' WHERE UserID = {$_SESSION['id']}";

$result = mysqli_query($connection, $query);
header("location: index.php");
?>