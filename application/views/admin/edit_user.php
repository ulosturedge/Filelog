<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title></title>
    <link rel="stylesheet" type="text/css" href="organizeproject_style.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

</head>

<body>

    <div class="container-fluid">
        <div id="page-login" class="row">
            <div class="col-xs-12 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                <div class="text-center">

                </div>
                <div class="box">
                    <div class="box-content">
                        <div class="text-center">
                            <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
                            <h3 class="page-header">User Update</h3>
                            <h4 class="bg-danger"></h4>
                        </div>

<?php foreach($user as $attrib):;?>



                        <form method="post" action="<?php echo base_url(); ?>public/judicial/edit_user/<?php echo $attrib->id;?>">

                            <div class="form-group">
                                <label for="username">Full Name</label>
                                <input type="text" class="form-control" name="fname" value="<?php echo $attrib->fname; ?>">

                            </div>

                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" name="uid" value="<?php echo $attrib->uid; ?>">

                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="pwd" value="" placeholder="****">

                            </div>
                            <div class="form-group">
                                <label>Confirm Password*</label>
                                <input type="password" class="form-control" name="password2" placeholder="Enter Password Again">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" value="Submit" class="btn btn-primary">

                            </div>


                        </form>
<?php endforeach;?>

                    </div>
                </div>
            </div>
        </div>
    </div>