<?php
require_once 'model/readClass.php';
$read = new ReadClass();
$result = $read->readAll();
if (mysqli_num_rows($result) > 0) {
    echo "<table class='table table-bordered table-striped'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Title</th>";
    echo "<th>Description</th>";
    echo "<th>Due date</th>";
    echo "<th>status</th>";
    echo "<th>Action</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['title'] . "</td>";
        echo "<td>" . $row['description'] . "</td>";
        echo "<td>" . $row['due_date'] . "</td>";
        echo "<td>" . $row['status'] . "</td>";
        echo "<td>";
        echo "<a href='view/read.php?title=" . $row['title'] . "' title='View Task' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
        echo "<a href='view/update.php?title=" . $row['title'] . "' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
        echo "<a href='view/delete.php?title=" . $row['title'] . "' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
        echo "</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
    // Free result set
    mysqli_free_result($result);
} else {
    echo "<p class='lead'><em>No records were found.</em></p>";
}
?>