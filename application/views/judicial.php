<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Judicial Chart
                </h1>
                <h8>
                    <?php echo $_SESSION['uid'];?>
                </h8>
                <h8> total files:
                    <?php echo count($judicials); ?>
                </h8>
                <table id="myTable" class="table table-sm table-striped table-bordered table-condensed table-hover header-fixed">
                    <thead>
                        <tr>
                            <th>File#</th>
                            <th>File Name</th>
                            <th>Status</th>
                            <th>File Age</th>
                            <th>Last Modified</th>
                            <th>Born Date</th>
                            <th>Notes</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $array = json_decode(json_encode($notes), True); ?>

                        <?php foreach($judicials as $judicial): ?>

                        <?php
    
 //   $saninotes = htmlspecialchars($judiciallog->notes);
    
   $newborntime = date('F d Y H:i:s.', strtotime($judicial->born_date));
        
?>

                            <tr>
                                <td>
                                    <?php echo $judicial->file_id; ?>
                                </td>

                                <td><a id='' href='<?php echo $judicial->filepath; ?>'><?php echo $judicial->filename; ?></a>

                                    <form method='POST' action='<?php echo base_url(); ?>public/judicial/check_out_file/judicial'>
                                        <input type='hidden' name='id' value='<?php echo $judicial->id; ?>'>
                                        <input type='hidden' name='path' value='<?php echo $judicial->filepath; ?>'>
                                        <input type='hidden' name='file' value='<?php echo $judicial->filename; ?>'>
                                        <input class='btn-primary' value='check out' type='submit' name='<?php echo $judicial->id; ?>' id='<?php echo $judicial->id; ?>'></form>

                                </td>
                                <td>
                                    <h5>
                                        <?php echo $judicial->file_status ?>
                                    </h5>
                                </td>
                                <td>
                                    <?php echo $judicial->ago; ?>
                                </td>



                                <td>
                                    <?php echo $judicial->lastmodified; ?>
                                </td>

                                <td>
                                    <?php echo $newborntime; ?>
                                </td>
                                <td class='notetext'>
                                    <?php echo $judicial->notes; ?><br>



                                    <?php if(is_integer(array_search(array('file_id' => $judicial->file_id), $array))) { echo "<a href=".base_url()."public/notes/details/".$judicial->file_id.">more..</a>"; }?>


                                </td>


                                <?php endforeach; ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
