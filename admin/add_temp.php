

<?php


session_start();
if(isset($_SESSION['admin'])){



include('connection.php');


$targetFile1;
$targetFile2;
$targetFile3;

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['html']) && isset($_FILES['css']) && isset($_FILES['img'])) {
    $uploadDirectory = 'temp/'; // Directory where images will be stored

   


    // Create the upload directory if it doesn't exist
    if (!is_dir($uploadDirectory)) {
        mkdir($uploadDirectory, 0777, true);
    }

    $targetFile1 = $uploadDirectory.rand().basename($_FILES['img']['name']);
    $targetFile2 =  $uploadDirectory.rand().basename($_FILES['html']['name']);
    $targetFile3 =  $uploadDirectory.rand().basename($_FILES['css']['name']);


    // Move the uploaded file to the upload directory
    if ((move_uploaded_file($_FILES['img']['tmp_name'], $targetFile1)) && (move_uploaded_file($_FILES['html']['tmp_name'], $targetFile2))&& (move_uploaded_file($_FILES['css']['tmp_name'], $targetFile3))) {
        echo "Image uploaded successfully.";
    } else {
        echo "Error: Image upload failed.";
    }
}




$query="INSERT INTO `cv_template`( `link`, `image`, `css`) VALUES ('{$targetFile2}','{$targetFile1}','{$targetFile3}')";





if (mysqli_query($connection, $query)) {
    header("location:addtemplate.php");
 } else {
    echo "Error inserting data: " . mysqli_error($connection);
 }

 $_SESSION['done']=True;
}else{header("location: \Cvit-CVgenerator/authentication/login.php");}

?>



