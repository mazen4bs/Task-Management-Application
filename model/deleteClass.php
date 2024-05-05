<?php

require_once 'Database.php';

class DeleteClass {

    private $db;
    private $link;

    public function __construct() {
        $this->db = new Database();
        $this->link = $this->db->connectToDB();
    }

    public function delete($title) {
        $sql = "DELETE FROM task WHERE title = ?";
        if ($stmt = mysqli_prepare($this->link, $sql)) {
              $param_title = trim($_POST["title"]);
            mysqli_stmt_bind_param($stmt, "s", $param_title);

            if (mysqli_stmt_execute($stmt)) {
                return true;
            } else {
                return false;
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);

        // Close connection
        //mysqli_close($link);
        //return false;
    }

}
