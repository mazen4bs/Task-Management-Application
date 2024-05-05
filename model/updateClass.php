<?php

include_once 'Database.php';

class updateClass {

    //put your code here
    private $db;
    private $link;

    public function __construct() {
        echo 'created';
        $this->db = new Database();
        $this->link = $this->db->connectToDB();
    }

    public function update($title, $description, $due_date, $status) {
        $sql = "UPDATE task SET title=?, description=?, due_date=?, status=? WHERE title=?";

        if ($stmt = mysqli_prepare($this->link, $sql)) {
            mysqli_stmt_bind_param($stmt, "sssss", $title, $description, $due_date, $status, $title);

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
