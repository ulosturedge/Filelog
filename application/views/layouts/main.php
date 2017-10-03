<?php $this->load->view('layouts/includes/header'); ?>

        <!-- Navigation -->
<?php $this->load->view('layouts/includes/navi'); ?>        
    
            <!-- end of navigation -->
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
<?php $this->load->view('layouts/includes/sidebar'); ?> 
       
        <!--Display Main Content-->
	<?php $this->load->view($main_content); ?>          
        
<?php $this->load->view('layouts/includes/footer'); ?>
