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

                            <h3 class="page-header">Login</h3>
                            <h4 class="bg-danger"></h4>
                        </div>
                        <?php if($this->session->flashdata('fail_login')) : ?>
                        <div class="alert alert-danger">
                            <?php echo $this->session->flashdata('fail_login'); ?>
                        </div>
                        <?php endif; ?>

                        <form method="post" action="<?php echo base_url(); ?>public/users/login">
                            <div class="form-group">
                                <label for="username" class="control-label">Username</label>
                                <input type="text" class="form-control" name="uid" value="" />
                            </div>
                            <div class="form-group">
                                <label for="password" class="control-label">Password</label>
                                <input type="password" class="form-control" name="pwd" value="" />
                            </div>
                            <div class="text-center">
                                <!--<input type="submit" name="submit" value="Submit" class="btn btn-primary">-->
                                <button type="submit" name="submit" value="Submit" class="btn btn-primary">Sign in</button>
                                <!--<a href="../index_v1.html" class="btn btn-primary">Sign in</a>-->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>









</body>

</html>
