<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Output Chart
                </h1>
                <h8>
                    <?php echo $_SESSION['uid'];?>
                </h8>
                <h8> total files:
                    <?php echo count($outputs); ?>
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
                        <?php foreach($outputs as $output): ?>

                        <?php
    
 //   $saninotes = htmlspecialchars($outputlog->notes);
    
   $newborntime = date('F d Y H:i:s.', strtotime($output->born_date));
        
?>

                            <tr>
                                <td>
                                    <?php echo $output->file_id; ?>
                                </td>
                                <td><a id='' href='<?php echo $output->filepath; ?>'><?php echo $output->filename; ?></a>

                                    <form method='POST' action='<?php echo base_url(); ?>public/judicial/check_out_file/output'>
                                        <input type='hidden' name='id' value='<?php echo $output->id; ?>'>
                                        <input type='hidden' name='path' value='<?php echo $output->filepath; ?>'>
                                        <input type='hidden' name='file' value='<?php echo $output->filename; ?>'>
                                        <input class='btn-primary' value='check out' type='submit' name='<?php echo $output->id; ?>' id='<?php echo $output->id; ?>'></form>



                                </td>
                                <td>
                                    <h5>
                                        <?php echo $output->file_status ?>
                                    </h5>
                                </td>
                                <td>
                                    <?php echo $output->ago; ?>
                                </td>



                                <td>
                                    <?php echo $output->lastmodified; ?>
                                </td>

                                <td>
                                    <?php echo $newborntime; ?>
                                </td>
                                <td class='notetext'>
                                    <?php echo $output->notes; ?><br>


                                    <?php if(is_integer(array_search(array('file_id' => $output->file_id), $array))) { echo "<a href=".base_url()."public/notes/details/".$output->file_id.">more..</a>"; }?>

                                </td>


                                <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
