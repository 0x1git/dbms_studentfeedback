<?php 
    ob_start(); 
    require 'config.php';

    $year = $_POST['year'];
    $sem = $_POST['sem'];
    $date = $_POST['date'];
    $branch = $_POST['branch'];
    $section = $_POST['section'];
    $subject = $_POST['subject'];
    $ques1 = $_POST['ques1'];
    $ques2 = $_POST['ques-2i'];
    $ques3 = $_POST['ques-2ii'];
    $ques4 = $_POST['ques-2iii'];
    $ques5 = $_POST['ques-2iv'];
    $ques6 = $_POST['ques-2v'];
    $ques7 = $_POST['ques3'];
    $ques8 = $_POST['ques4'];
    $remarks = $_POST['remarks'];

    $query = mysqli_query($con, "INSERT INTO `feedback`(`id`, `year`, `sem`, `date`, `branch`, `section`, `subject`, `ques1`, `ques2`, `ques3`, `ques4`, `ques5`, `ques6`, `ques7`, `ques8`, `remarks`) 
                                 VALUES ('', '$year', '$sem', '$date', '$branch', '$section', '$subject', '$ques1', '$ques2', '$ques3', '$ques4', '$ques5', '$ques6', '$ques7', '$ques8', '$remarks')");

    echo '<script>alert("Thank you for the feedback."); location.replace(document.referrer);</script>';
?>