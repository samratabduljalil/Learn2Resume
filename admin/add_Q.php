<?php

include('connection.php');






$query="INSERT INTO `question`( `question`, `answer`,  `course_code`, `op1`, `op2`, `op3`, `op4`) VALUES ('{$_POST['q1']}','{$_POST['ans2']}','{$_POST['C_code']}','{$_POST['op21']}','{$_POST['op22']}','{$_POST['op23']}','{$_POST['op24']}')";




if (mysqli_query($connection, $query)) {
    header("location: login.php");
 } else {
    echo "Error inserting data: " . mysqli_error($connection);
}

$query="INSERT INTO `question`( `question`, `answer`,  `course_code`, `op1`, `op2`, `op3`, `op4`) VALUES ('{$_POST['q3']}','{$_POST['ans3']}','{$_POST['C_code']}','{$_POST['op31']}','{$_POST['op32']}','{$_POST['op33']}','{$_POST['op34']}')";




if (mysqli_query($connection, $query)) {
    header("location: login.php");
 } else {
    echo "Error inserting data: " . mysqli_error($connection);
}




$query="INSERT INTO `question`( `question`, `answer`,  `course_code`, `op1`, `op2`, `op3`, `op4`) VALUES ('{$_POST['q4']}','{$_POST['ans4']}','{$_POST['C_code']}','{$_POST['op41']}','{$_POST['op42']}','{$_POST['op43']}','{$_POST['op44']}')";




if (mysqli_query($connection, $query)) {
    header("location: login.php");
 } else {
    echo "Error inserting data: " . mysqli_error($connection);
}
5

$query="INSERT INTO `question`( `question`, `answer`,  `course_code`, `op1`, `op2`, `op3`, `op4`) VALUES ('{$_POST['q5']}','{$_POST['ans5']}','{$_POST['C_code']}','{$_POST['op51']}','{$_POST['op52']}','{$_POST['op53']}','{$_POST['op54']}')";




if (mysqli_query($connection, $query)) {
    header("location: login.php");
 } else {
    echo "Error inserting data: " . mysqli_error($connection);
}


$query="INSERT INTO `question`( `question`, `answer`,  `course_code`, `op1`, `op2`, `op3`, `op4`) VALUES ('{$_POST['q1']}','{$_POST['ans1']}','{$_POST['C_code']}','{$_POST['op11']}','{$_POST['op12']}','{$_POST['op13']}','{$_POST['op14']}')";




if (mysqli_query($connection, $query)) {
    header("location: login.php");
 } else {
    echo "Error inserting data: " . mysqli_error($connection);
}



?>