<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    All Notes
                </h1><small><?php echo $_SESSION['uid'];?></small>
                <table id="myTable" class="table table-sm table-striped table-bordered table-condensed table-hover header-fixed">

                    <thead>
                        <tr>
                            <th>File#</th>
                            <th>File Name</th>
                            <th>Previous Notes</th>
                            <th>Date-Time</th>
                            <th>User</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($notes as $note): ?>
                        <tr>
                            <td>
                                <?php echo $note->file_id; ?>
                            </td>
                            <td>
                                <?php echo $note->filename; ?>
                            </td>
                            <td>
                                <?php echo $note->prev_notes; ?>
                            </td>
                            <td>
                                <?php echo $note->timestamp; ?>
                            </td>
                            <td>
                                <?php echo $note->uid; ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
