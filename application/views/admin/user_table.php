<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <?php if($this->session->flashdata('deleted')) : ?>
                <div class="alert alert-success">
                    <?php echo $this->session->flashdata('deleted'); ?>
                </div>
                <?php endif; ?>
                <?php if($this->session->flashdata('updated')) : ?>
                <div class="alert alert-success">
                    <?php echo $this->session->flashdata('updated'); ?>
                </div>
                <?php endif; ?>
                <h1 class="page-header">
                    Users
                </h1>
                <h8>Users</h8>
                <div class="file_total d-inline">
                <h8> total files:
                    <?php echo count($users); ?>
                </h8></div>
            
                
                <div class="export_form pull-right">
                <form class="form-horizontal" method='POST' action='<?php echo base_url();?>public/users/register_page'>
                        <input class="btn btn-sm btn-primary" value='Add User' type='submit' name='create_pdf'>
                    </form></div>
                
                <table id="myTable" class="table table-sm table-striped table-bordered table-condensed table-hover header-fixed">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Name</th>
                        </tr>
                    </thead>


                    <div id='table_css'>
                        <tbody>
                            <?php foreach($users as $user): ?>






                                <tr>
                                    <td>
                                        <?php echo $user->id; ?>
                                    </td>

                                    <td>
                                        <h7>
                                            <?php echo $user->uid; ?>
                                        </h7>
                                        <div class="action_link">
                                    <a class="delete_link" href="<?php echo base_url();?>public/judicial/delete_user/<?php echo $user->id; ?>">Delete</a>
                                    <a href="<?php echo base_url();?>public/judicial/edit_user_page/<?php echo $user->id; ?>">Edit</a>
                                    
                                    </div>
                                    </td>


                                    
                                    <td>
                                        <?php echo $user->fname; ?>
                                    </td>



                                    


                                    <?php endforeach; ?>

                        </tbody>
                    </div>
                </table>
            </div>
        </div>
    </div>
</div>
