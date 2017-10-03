<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <?php if($this->session->flashdata('registered')) : ?>
                <div class="alert alert-success">
                    <?php echo $this->session->flashdata('registered'); ?>
                </div>
                <?php endif; ?>
                <?php if($this->session->flashdata('pass_login')) : ?>
                <div class="alert alert-success">
                    <?php echo $this->session->flashdata('pass_login'); ?>
                </div>
                <?php endif; ?>
                <h1 class="page-header">
                    Log
                </h1>
                <h8>Log</h8>
                <div class="file_total d-inline">
                <h8> total files:
                    <?php echo count($logs); ?>
                </h8></div>
            
                <div class="export_form pull-right">
                
                <form class="form-horizontal" action="<?php echo base_url();?>public/Pdf_Controller/excel_export" method="post" name="upload_excel" enctype="multipart/form-data">
                    <input type="submit" name="Export" class="btn btn-sm btn-success" value="export(excel)"/>
                    </form></div>
                <div class="export_form pull-right">
                <form class="form-horizontal" method='POST' action='<?php echo base_url();?>public/Pdf_Controller/generate_pdf'>
                        <input class="btn btn-sm btn-primary" value='export(pdf)' type='submit' name='create_pdf'>
                    </form></div>
                
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


                    <div id='table_css'>
                        <tbody>
                            <?php foreach($logs as $log): ?>





                            <?php
    
 //   $saninotes = htmlspecialchars($loglog->notes);
    
   $newborntime = date('F d Y H:i:s.', strtotime($log->born_date));
        
?>

                                <tr>
                                    <td>
                                        <?php echo $log->id; ?>
                                    </td>

                                    <td>
                                        <h7>
                                            <?php echo $log->filename; ?>
                                        </h7>
                                    </td>


                                    <?php if (strpos($log->file_status, 'reserved') == true) {
    
    echo "<td id='active_status'>".$log->file_status."</td>";

} else if (strpos($log->file_status, 'output') == true && strpos($log->file_status, 'reserved') != true) {
    
    echo "<td id='output_ready'>".$log->file_status."</td>";
} else if (strpos($log->file_status, 'legal') == true || strpos($log->file_status, 'judicial') == true || strpos($log->file_status, 'production') == true) {
    
    echo "<td id='idle_status'>".$log->file_status."</td>";
}else  { 
    
    echo "<td id='new_status'>".$log->file_status."</td>"; } ; ?>
                                    <td>
                                        <?php echo $log->ago; ?>
                                    </td>



                                    <td>
                                        <?php echo $log->lastmodified; ?>
                                    </td>

                                    <td>
                                        <?php echo $newborntime; ?>
                                    </td>
                                    <td class='notetext'>
                                        <?php echo $log->notes; ?><br>

                                        <form method='post' action='<?php echo base_url(); ?>public/judicial/pure_notes'>
                                            <!-- $saninotes -->
                                            <input type='hidden' name='id' value='<?php echo $log->id; ?>'>
                                            <input type='hidden' name='table' value='note_history'>
                                            <input type='hidden' name='file' value='<?php echo $log->filename; ?>'>
                                            <input type='hidden' name='range' value='0'>
                                            <?php if ($log->notes) { echo "<button class='btn-primary' type='submit'>more..</button>"; } ?>



                                            <!--<a href="<?php// echo base_url(); ?>public/notes/details/<?php// echo $log->id; ?>">more..</a>-->
                                            <!--<a href="<?php //echo base_url(); ?>public/notes/more/">more..</a>-->
                                        </form>
                                    </td>


                                    <?php endforeach; ?>

                        </tbody>
                    </div>
                </table>
            </div>
        </div>
    </div>
</div>
