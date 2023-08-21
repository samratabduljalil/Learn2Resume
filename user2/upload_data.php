

<?php


session_start();




include('connection.php');


$targetFile1;
$targetFile2;

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['pro_img']) && isset($_FILES['co_img'])) {
    $uploadDirectory = 'upload/'; // Directory where images will be stored

    // Validate the uploaded file
    $allowedExtensions = array('jpg', 'jpeg', 'png', 'gif');
    $fileExtension1 = strtolower(pathinfo($_FILES['pro_img']['name'], PATHINFO_EXTENSION));
    $fileExtension2 = strtolower(pathinfo($_FILES['co_img']['name'], PATHINFO_EXTENSION));

    if (!in_array($fileExtension1, $allowedExtensions) && !in_array($fileExtension2, $allowedExtensions)) {
        die('Error: Invalid file format. Only JPG, JPEG, PNG, and GIF images are allowed.');
    }

    // Create the upload directory if it doesn't exist
    if (!is_dir($uploadDirectory)) {
        mkdir($uploadDirectory, 0777, true);
    }

    $targetFile1 = $uploadDirectory . basename($_FILES['pro_img']['name']);
    $targetFile2 = $uploadDirectory . basename($_FILES['co_img']['name']);


    // Move the uploaded file to the upload directory
    if ((move_uploaded_file($_FILES['pro_img']['tmp_name'], $targetFile)) && (move_uploaded_file($_FILES['image']['co_img'], $targetFile))) {
        echo "Image uploaded successfully.";
    } else {
        echo "Error: Image upload failed.";
    }
}




"UPDATE `cv_user` SET `phone`='{$_SESSION['phone']}',`position`='{$_SESSION['position']}',`edu_1`='{$_SESSION['edu1']}',`edu_2`='{$_SESSION['edu2']}',`degree_1`='{$_SESSION['deg1']}',`degree_2`='{$_SESSION['deg2']}',`cgpa_1`='{$_SESSION['cgpa1']}',`cgpa_2`='{$_SESSION['cgpa2']}',`c_name_1`='{$_SESSION['og1']}',`c_name_2`='{$_SESSION['og2']}',`c_position_1`='{$_SESSION['p1']}',`c_position_2`='{$_SESSION['p2']}',`c_year_1`='{$_SESSION['y1']}',`c_year_2`='{$_SESSION['y2']}',`skills_1`='{$_SESSION['s1']}',`skills_2`='{$_SESSION['s2']}',`skills_3`='{$_SESSION['s3']}',`skills_4`='{$_SESSION['s4']}',`skills_5`='{$_SESSION['s5']}',`skills_6`='{$_SESSION['s6']}',`img`='{$targetFile1}',`about`='{$_SESSION['about']}',`address`='{$_SESSION['address']}',`image_co`='{$targetFile2}' WHERE UserID = {$_SESSION['id']}";





if (mysqli_query($connection, $query)) {
    header("location: index.php");
 } else {
    echo "Error inserting data: " . mysqli_error($connection);
 }
?>



