<?php
$title = $description = $due_date= $status= "";
$title_err = $description_err = $due_date_err= $status_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_title = trim($_POST["title"]);
    if (empty($input_title)) {
        $title_err = "Please enter a title.";
    }  else {
        $title = $input_title;
    }

    $input_description = trim($_POST["description"]);
    if (empty($input_description)) {
        $description_err = "Please enter a description.";
    } else {
        $description = $input_description;
    }

    $input_due_date = trim($_POST["due_date"]);
    if (empty($input_due_date)) {
        $due_date_err = "Please enter the due date.";
    }  else {
        $due_date = $input_due_date;
    }
    $input_status = trim($_POST["status"]);
    if (empty($input_status)) {
        $status_err = "Please enter the status .";
    } else {
        $status = $input_status;
    }
    if (empty($title_err) && empty($description_err) && empty($due_date_err) && empty($status_err)) {

        require_once '../model/createClass.php';
        $creator = new CreateClass();
        if ($creator->insertRecord($title, $description, $due_date, $status)) {
            header("location: ../index.php");
        } else {
            echo "Something went wrong. Please try again later.";
        }
    }

}
?>