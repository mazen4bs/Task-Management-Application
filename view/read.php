
<!DOCTYPE html>
<?php
include_once '../controller/readController.php';
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>View Record</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        <style type="text/css">
            .wrapper{
                width: 500px;
                margin: 0 auto;
            }
        </style>
    </head>
    <body>
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <form action="../controller/readController.php" method="post">

                            <div class="page-header">
                                <h1>View Record</h1>
                            </div>
                            <div class="form-group">
                                <label>task</label>
                                <p class="form-control-static"><?php echo $row["title"]; ?></p>
                            </div>
                            <div class="form-group">
                                <label>description</label>
                                <p class="form-control-static"><?php echo $row["description"]; ?></p>
                            </div>
                            <div class="form-group">
                                <label>due_date</label>
                                <p class="form-control-static"><?php echo $row["due_date"]; ?></p>
                            </div>
                            <div class="form-group">
                                <label>status</label>
                                <p class="form-control-static"><?php echo $row["status"]; ?></p>
                            </div>
                            <p><a href="../index.php" class="btn btn-primary">Back</a></p>
                        </form>
                    </div>
                </div>        
            </div>
        </div>
    </body>
</html>