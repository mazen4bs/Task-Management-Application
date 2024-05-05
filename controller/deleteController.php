
<?php

if (isset($_POST["title"]) && !empty($_POST["title"])) {
    $title == $_POST["title"];
    require_once '../model/deleteClass.php';
    $delete = new DeleteClass();
    if ($delete->delete($title)) {
        header("location: ../index.php");
    } else {
        echo "Something went wrong. Please try again later.";
    }
} else {
    if (empty(trim($_GET["title"]))) {
        header("location: error.php");
        exit();
    }
}
?>
