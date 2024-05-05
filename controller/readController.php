<?php
if (isset($_GET["title"]) && !empty(trim($_GET["title"]))) {
    $title = trim($_GET["title"]);

    include_once '../model/readClass.php';
    $reader = new ReadClass();
    if ($row = $reader->readOneRecord($title)) {
        $title = $row["title"];
        $description = $row["description"];
        $due_date = $row["due_date"];
        $status= $row["status"];
    } else {
        echo "Something went wrong. Please try again later.";
    }
} else {
    header("location: error.php");
    exit();
}
?>