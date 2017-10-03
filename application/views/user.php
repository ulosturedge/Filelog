<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    My User Chart
                </h1>
                <h8>
                    <?php echo $_SESSION['uid'];?>
                </h8>
                <h8> total files:
                    <?php echo count($users); ?>
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

                        <?php foreach($users as $user): ?>


                        <script>
                            // Validating Empty Field
                            function check_empty() {
                                if (document.getElementById('id').value == "" || document.getElementById('notes').value == "") {
                                    alert("Fill All Fields !");
                                } else {
                                    document.getElementById('form').submit();
                                    alert("Form Submitted Successfully...");
                                }
                            }
                            //Function To Display Popup
                            function div_show_<?php echo $user->file_id; ?> () {
                                document.getElementById('abc-<?php echo $user->file_id;?>').style.display = "block";
                            }
                            //Function to Hide Popup
                            function div_hide_<?php echo $user->file_id; ?> () {
                                document.getElementById('abc-<?php echo $user->file_id;?>').style.display = "none";
                            }

                        </script>

                        <?php
    
 //   $saninotes = htmlspecialchars($userlog->notes);
    
   $newborntime = date('F d Y H:i:s.', strtotime($user->born_date));
        
?>

                            <tr>

                                <td>
                                    <?php echo $user->file_id; ?>


                                    <div style="display:none" id='abc-<?php echo $user->file_id; ?>'>
                                        <div id='popupContact'>
                                            <!-- Contact Us Form -->
                                            <form action='<?php echo base_url(); ?>public/judicial/add_notes' id='formpop' method='post' name='form'>
                                                <img id='close' src='<?php echo base_url(); ?>assets/images/3.png' onclick='div_hide_<?php echo $user->file_id; ?>()'>
                                                <h2>Note Form</h2>
                                                <hr>
                                                <div class='form-group'>
                                                    <label class='d-block' for='fileid'>File ID - <?php echo $user->file_id; ?></label>
                                                    <input type='hidden' name='id' placeholder='<?php echo $user->id; ?>' class='form-control'>
                                                    <input type='hidden' name='file_id' value='<?php echo $user->file_id; ?>' class='form-control'>

                                                    <label id='file_label' for='filename'>File Name - <?php echo $user->filename; ?></label>
                                                    <input type='hidden' name='file' value='<?php echo $user->filename; ?>' placeholder='<?php echo $user->filename; ?>' class='form-control'>
                                                </div>
                                                <div class='form-group'>
                                                    <label id='note_label' for='notes'>Notes</label>
                                                    <textarea id='notes' name='notes' class='form-control' placeholder='Notes:'></textarea>

                                                </div>

                                                <div class='form-group'>
                                                    <input id='notesubmit' type='submit' name='notes_submit' value='Submit' class='btn btn-primary'>

                                                </div>
                                            </form>

                                        </div>

                                        <!-- Popup Div Ends Here -->
                                    </div>
                                    <!-- Display Popup Button -->

                                    <button class='btn-primary' id='popup' onclick='div_show_<?php echo $user->file_id; ?>()'><h6 id='add_note' style='white-space: nowrap;'>Add Note</h6></button></td>






                                <td><a class='pull-left' href='<?php echo $user->filepath; ?>'><?php echo $user->filename; ?></a>
                                    <div class="btn-group-vertical pull-right">

                                        <form method='POST' action='<?php echo base_url(); ?>public/judicial/send_file_on/<?php echo $user->id; ?>/legal'>
                                            <input type='hidden' name='id' value='<?php echo $user->id; ?>'>
                                            <input type='hidden' name='path' value='<?php echo $user->filepath; ?>'>
                                            <input type='hidden' name='file' value='<?php echo $user->filename; ?>'>
                                            <input class="btn btn-default btn-sm" value='Send to Legal' type='submit' name='<?php echo $user->id; ?>' id='<?php echo $user->id; ?>'></form>

                                        <form class='' method='POST' action='<?php echo base_url(); ?>public/judicial/send_file_on/<?php echo $user->id; ?>/production'>
                                            <input type='hidden' name='id' value='<?php echo $user->id; ?>'>
                                            <input type='hidden' name='path' value='<?php echo $user->filepath; ?>'>
                                            <input type='hidden' name='file' value='<?php echo $user->filename; ?>'>
                                            <input class="btn btn-default btn-sm" value='Send to Production' type='submit' name='<?php echo $user->id; ?>' id='<?php echo $user->id; ?>'></form>

                                        <!--<form method='POST' action='<?php echo base_url(); ?>public/judicial/finalize2/output'>-->
                                        <form class='' method='POST' action='<?php echo base_url(); ?>public/judicial/send_file_on/<?php echo $user->id; ?>/output'>
                                            <input type='hidden' name='id' value='<?php echo $user->id; ?>'>
                                            <input type='hidden' name='path' value='<?php echo $user->filepath; ?>'>
                                            <input type='hidden' name='file' value='<?php echo $user->filename; ?>'>
                                            <input class="btn btn-primary btn-sm" value='Send to Output' type='submit' name='<?php echo $user->id; ?>' id='<?php echo $user->id; ?>'></form>

                                        <form class='' method='POST' action='<?php echo base_url(); ?>public/judicial/send_file_on/<?php echo $user->id; ?>/judicial'>
                                            <input type='hidden' name='id' value='<?php echo $user->id; ?>'>
                                            <input type='hidden' name='path' value='<?php echo $user->filepath; ?>'>
                                            <input type='hidden' name='file' value='<?php echo $user->filename; ?>'>
                                            <input class="btn btn-info btn-sm" value='Return to Judicial' type='submit' name='<?php echo $user->id; ?>' id='<?php echo $user->id; ?>'></form>
                                    </div>


                                </td>

                                <td>
                                    <h5>
                                        <?php echo $user->file_status ?>
                                    </h5>
                                </td>


                                <td>
                                    <?php echo $user->ago; ?>
                                </td>



                                <td>
                                    <?php echo $user->lastmodified; ?>
                                </td>

                                <td>
                                    <?php echo $newborntime; ?>
                                </td>


                                <td class='notetext'>
                                    <?php echo $user->notes; ?><br>


                                    <?php if(is_integer(array_search(array('file_id' => $user->file_id), $array))) { echo "<a href=".base_url()."public/notes/details/".$user->file_id.">more..</a>"; }?>

                                    <!--<a href="<?php echo base_url(); ?>public/notes/details/<?php echo $user->file_id; ?>">more..</a>-->

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
