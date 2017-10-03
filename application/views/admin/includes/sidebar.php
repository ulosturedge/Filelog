<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">

// Ajax post
$(document).ready(function() {


$.ajax({
        url:"<?php echo base_url(); ?>public/judicial/get_ajax_count",
        cache: false,
        dataType:'text',
        type:"GET",
        success: function(result){
            var obj = $.parseJSON(result);
            
    console.log(obj);

        

/*var resultArray = [];
for (var key in obj) resultArray = resultArray.concat(obj[key]);

console.log(resultArray); 
                
              console.log(resultArray[0]);
            var judicial = resultArray[0];*/
            
            

var generateHere = document.getElementById("judicial_link");
generateHere.innerHTML = '<i class="fa fa-table"></i> Judicial Table ('+obj.judicial+')';
var generateHere1 = document.getElementById("legal_link");
generateHere1.innerHTML = '<i class="fa fa-table"></i> Legal Table ('+obj.legal+')';
var generateHere2 = document.getElementById("production_link");
generateHere2.innerHTML = '<i class="fa fa-table"></i> Production Table ('+obj.production+')';
var generateHere3 = document.getElementById("output_link");
generateHere3.innerHTML = '<i class="fa fa-table"></i> Output Table ('+obj.output+')';

}
});

});
</script>

               <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="<?php echo base_url(); ?>public/judicial/dashboard"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
    
     <li><a class='ajax-link' href="<?php echo base_url();?>public/judicial/log"><i class='fa fa-list-ul'></i> Master Log</a></li>
    <li><a href="<?php echo base_url();?>public/judicial/user_list"><i class='fa fa-fw fa-users'></i> Users</a></li>

                    
                    
                    
                    
                    
                    
					    <li><a class="ajax-link" id="judicial_link" href="<?php echo base_url(); ?>public/judicial">Judicial Table </a></li>
						<li><a class="ajax-link" id="legal_link" href="<?php echo base_url(); ?>public/judicial/legal">Legal Table </a></li>
				<li><a class="ajax-link" id="production_link" href="<?php echo base_url(); ?>public/judicial/production">Production Table </a></li>
						<li><a class="ajax-link" id="output_link" href="<?php echo base_url(); ?>public/judicial/output">Output Table </a></li>
				
					
					
				<li><a class="ajax-link" href="<?php echo base_url(); ?>public/judicial/all_notes"><i class="fa fa-sticky-note-o"></i> All Notes</a></li>
						
                        
                    
                    
                    
                 </ul>
                 
                 
            </div>
            <!-- /.navbar-collapse -->
        </nav>