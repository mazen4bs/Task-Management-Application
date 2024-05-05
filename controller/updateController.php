<?php



$title = $description = $due_date= $status = "";
$title_err = $description_err = $due_date_err= $status_err = "";

if (isset($_POST["title"]) && !empty($_POST["title"])) {
    echo 'post';

    $title = $_POST["title"];

    $input_title = trim($_POST["title"]);
    if (empty($input_title)) {
        $title_err = "Please enter a title.";
        } else {
        $title = $input_title;
    }

    $input_description = trim($_POST["description"]);
    if (empty($input_description)) {
        $description_err = "Please enter an description.";
    } else {
        $description = $input_description;
    }
    
    $input_due_date = trim($_POST["due_date"]);
    if (empty($input_due_date)) {
        $due_date_err = "Please enter the due_date amount.";
    } 
     else {
        $due_date = $input_due_date;
    }
    
    $input_status = trim($_POST["status"]);
    if (empty($input_status)) {
        $status_err = "Please enter Status.";
    } else {
        $status = $input_status;
    }
    if (empty($title_err) && empty($description_err) && empty($due_date_err) && empty($status_err)) {
        require_once '../model/updateClass.php';
        $updator = new updateClass();
        if ($updator->update($title, $description, $due_date, $status)) {
            header("location: ../index.php");
        } else {
            echo "Something went wrong. Please try again later.";
        }
        // Close statement
        //mysqli_stmt_close($stmt);
    }

    // Close connection
    //mysqli_close($link);
} else {

    if (isset($_GET["title"]) && !empty(trim($_GET["title"]))) {
        $title = trim($_GET["title"]);
        require_once '../model/readClass.php';
        $reader = new ReadClass();
        if ($row = $reader->readOneRecord($title)) {
            $title = $row["title"];
            $description = $row["description"];
            $due_date = $row["due_date"];
            $status=$row["status"];
        }
        else {
                    echo "Something went wrong. Please try again later.";

        }
    } else {
        header("location: error.php");
        exit();
    }
}
?>
