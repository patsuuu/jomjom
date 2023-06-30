<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student']);

    $query = "DELETE FROM stud_tbl WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Employee Deleted Successfully";
        header("Location: indexxx.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Employee Not Deleted";
        header("Location: indexxx.php");
        exit(0);
    }
}

if(isset($_POST['update_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);

    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $mname = mysqli_real_escape_string($con, $_POST['mname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $remarks = mysqli_real_escape_string($con, $_POST['remarks']);
    $status = mysqli_real_escape_string($con, $_POST['status']);

    $query = "UPDATE stud_tbl SET fname='$fname', mname='$mname', lname='$lname', remarks='$remarks', status='$status' WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Updated Successfully";
        header("Location: indexxx.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Updated";
        header("Location: indexxx.php");
        exit(0);
    }

}


if(isset($_POST['save_student']))
{
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $mname = mysqli_real_escape_string($con, $_POST['mname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $remarks = mysqli_real_escape_string($con, $_POST['remarks']);
    $status = mysqli_real_escape_string($con, $_POST['status']);

    $query = "INSERT INTO stud_tbl (fname, mname, lname, remarks, status) VALUES ('$fname','$mname','$lname','$remarks', '$status')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Student Created Successfully";
        header("Location: student-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Created";
        header("Location: student-create.php");
        exit(0);
    }
}

?>