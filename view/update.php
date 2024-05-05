
<!DOCTYPE html>
<?php
include_once '../controller/updateController.php';
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Update Record</title>
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
                        <div class="page-header">
                            <h2>Update Record</h2>
                        </div>
                        <p>Please edit the input values and submit to update the record.</p>
                        <form action="../controller/updateController.php" method="post">
                            <div class="form-group <?php echo (!empty($title_err)) ? 'has-error' : ''; ?>">
                                <label>title</label>
                                <input type="text" name="title" class="form-control" value="<?php echo $title; ?>">
                                <span class="help-block"><?php echo $title_err; ?></span>
                            </div>
                            <div class="form-group <?php echo (!empty($description_err)) ? 'has-error' : ''; ?>">
                                <label>description</label>
                                <textarea name="description" class="form-control"><?php echo $description; ?></textarea>
                                <span class="help-block"><?php echo $description_err; ?></span>
                            </div>
                            <div class="form-group <?php echo (!empty($due_date_err)) ? 'has-error' : ''; ?>">
                                <label>due_date</label>
                                <input type="text" name="due_date" class="form-control" value="<?php echo $due_date; ?>">
                                <span class="help-block"><?php echo $due_date_err; ?></span>
                            </div>
                            <div class="form-group <?php echo (!empty($status_err)) ? 'has-error' : ''; ?>">
                                <label>status</label>
                                <input type="text" name="status" class="form-control" value="<?php echo $status; ?>">
                                <span class="help-block"><?php echo $status_err; ?></span>
                            </div>
                            <input type="submit" class="btn btn-primary" value="Submit">
                            <a href="../index.php" class="btn btn-default">Cancel</a>
                        </form>
                    </div>
                </div>        
            </div>
        </div>
    </body>
</html>


