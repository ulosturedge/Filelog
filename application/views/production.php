<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Production Chart
                </h1>
                <h8>
                    <?php echo $_SESSION['uid'];?>
                </h8>
                <h8> total files:
                    <?php echo count($productions); ?>
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
                        <?php foreach($productions as $production): ?>

                        <?php
    
 //   $saninotes = htmlspecialchars($productionlog->notes);
    
   $newborntime = date('F d Y H:i:s.', strtotime($production->born_date));
        
?>

                            <tr>
                                <td>
                                    <?php echo $production->file_id; ?>
                                </td>
                                <td><a id='' href='<?php echo $production->filepath; ?>'><?php echo $production->filename; ?></a>

                                    <form method='POST' action='<?php echo base_url(); ?>public/judicial/check_out_file/production'>
                                        <input type='hidden' name='id' value='<?php echo $production->id; ?>'>
                                        <input type='hidden' name='path' value='<?php echo $production->filepath; ?>'>
                                        <input type='hidden' name='file' value='<?php echo $production->filename; ?>'>
                                        <input class='btn-primary' value='check out' type='submit' name='<?php echo $production->id; ?>' id='<?php echo $production->id; ?>'></form>

                                </td>
                                <td>
                                    <h5>
                                        <?php echo $production->file_status ?>
                                    </h5>
                                </td>
                                <td>
                                    <?php echo $production->ago; ?>
                                </td>



                                <td>
                                    <?php echo $production->lastmodified; ?>
                                </td>

                                <td>
                                    <?php echo $newborntime; ?>
                                </td>
                                <td class='notetext'>
                                    <?php echo $production->notes; ?><br>



                                    <?php if(is_integer(array_search(array('file_id' => $production->file_id), $array))) { echo "<a href=".base_url()."public/notes/details/".$production->file_id.">more..</a>"; }?>


                                </td>


                                <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
