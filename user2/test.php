

<?php


session_start();
echo $_FILES['pro_img']['name'];
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
    if ((move_uploaded_file($_FILES['pro_img']['tmp_name'], $targetFile1)) && (move_uploaded_file($_FILES['co_img']['tmp_name'], $targetFile2))) {
        echo "Image uploaded successfully.";
    } else {
        echo "Error: Image upload failed.";
    }
}




?>



