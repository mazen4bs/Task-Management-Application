<?php

include_once 'Database.php';

class CreateClass {

    public $db;
    private $link;
    public function __construct() {
        $this->db = new Database();
        $this->link = $this->db->connectToDB();
    }

    public function insertRecord($title, $description, $due_date, $status) {
      $sql = "INSERT INTO task (title, description, due_date, status) VALUES (?, ?, ?, ?)";

        if ($stmt = mysqli_prepare($this->link, $sql)) {
            mysqli_stmt_bind_param($stmt, "ssss", $title, $description, $due_date, $status);
            if (mysqli_stmt_execute($stmt)) {
                return true;
            } else {
                return false;
            }
        }
        echo 'outside if';

        // Close statement
        //mysqli_stmt_close($stmt);
        //mysqli_close($this->link);
        //return false;
    }

}
