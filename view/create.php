

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Create Task</title>
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
                            <h2>Create Task</h2>
                        </div>
                        <p>Please fill this form and submit to add Task.</p>
                        <form action="../controller/createController.php" method="post">
                            <div class="form-group <?php echo (!empty($title_err)) ? 'has-error' : ''; ?>">
                                <label>Task title</label>
                                <input type="text" name="title" class="form-control" >
                                
                            </div>
                            <div class="form-group <?php echo (!empty($description_err)) ? 'has-error' : ''; ?>">
                                <label>description</label>
                                <textarea name="description" class="form-control"></textarea>
                                
                            </div>
                            <div class="form-group <?php echo (!empty($due_date_err)) ? 'has-error' : ''; ?>">
                                <label>due date</label>
                                <input type="text" name="due_date" class="form-control" >
                            </div>
                            <div class="form-group <?php echo (!empty($status_err)) ? 'has-error' : ''; ?>">
                                <label>status</label>
                                <textarea name="status" class="form-control"></textarea>
                                
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
