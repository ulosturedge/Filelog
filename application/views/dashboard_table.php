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
                    Dashboard
                </h1>
                <h8>Dashboard</h8>
                <div class="file_total d-inline">
                <h8> total files:
                    <?php echo count($dashboards); ?>
                </h8></div>                 
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
                            <?php $array = json_decode(json_encode($notes), True); ?>
                            <?php foreach($dashboards as $dashboard): ?>





                            <?php
    
 //   $saninotes = htmlspecialchars($dashboardlog->notes);
    
   $newborntime = date('F d Y H:i:s.', strtotime($dashboard->born_date));
        
?>

                                <tr>
                                    <td>
                                        <?php echo $dashboard->file_id; ?>
                                    </td>

                                    <td>
                                        <h7>
                                            <?php echo $dashboard->filename; ?>
                                        </h7>
                                    </td>


                                    <?php if (strpos($dashboard->file_status, 'reserved') == true) {
    
    echo "<td id='active_status'>".$dashboard->file_status."</td>";

} else if (strpos($dashboard->file_status, 'output') == true && strpos($dashboard->file_status, 'reserved') != true) {
    
    echo "<td id='output_ready'>".$dashboard->file_status."</td>";
} else if (strpos($dashboard->file_status, 'legal') == true || strpos($dashboard->file_status, 'judicial') == true || strpos($dashboard->file_status, 'production') == true) {
    
    echo "<td id='idle_status'>".$dashboard->file_status."</td>";
}else  { 
    
    echo "<td id='new_status'>".$dashboard->file_status."</td>"; } ; ?>
                                    <td>
                                        <?php echo $dashboard->ago; ?>
                                    </td>



                                    <td>
                                        <?php echo $dashboard->lastmodified; ?>
                                    </td>

                                    <td>
                                        <?php echo $newborntime; ?>
                                    </td>
                                    <td class='notetext'>
                                        <?php echo $dashboard->notes; ?><br>


                                        <?php if(is_integer(array_search(array('file_id' => $dashboard->file_id), $array))) { echo "<a href=".base_url()."public/notes/details/".$dashboard->file_id.">more..</a>"; }?>

                                    </td>


                                    <?php endforeach; ?>

                        </tbody>
                    </div>
                </table>
            </div>
        </div>
    </div>
</div>
