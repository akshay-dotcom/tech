
<!-- BEGIN PAGE -->  
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			
			
			
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE CONTAINER-->
			<div class="container-fluid">
				<!-- BEGIN PAGE HEADER-->   
				<div class="row-fluid">
					<div class="span12">
 
						<h3 class="page-title">
							
							<small></small>
						</h3>
						
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				
				
				
				
				
				<div class="portlet box blue">
					<div class="portlet-title">
						<div class="caption" style='font-size:25px;font-weight:bold;'>Edit User</div>
						<div class="tools">
							<a href="javascript:;" class="collapse"></a>
					
							<a href="javascript:;" class="reload"></a>
							
						</div>
					</div>
					<div class="portlet-body form">
					<div class="row-fluid">
					
					
					
						
							
										<!-- BEGIN FORM-->
											
												    
												    
														
														  
<p><?php echo lang('edit_user_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open(uri_string());?>
      <table class="table table-hover">
	  <tr>
            <td><?php echo lang('edit_user_fname_label', 'first_name');?></td>
            <td><?php echo form_input($first_name);?></td>
      </tr>

      <tr>
            <td><?php echo lang('edit_user_lname_label', 'last_name');?></td> 
            <td><?php echo form_input($last_name);?></td>
      </tr>

      <tr>
            <td><?php echo lang('edit_user_company_label', 'company');?></td>
            <td><?php echo form_input($company);?></td>
      </tr>

      <tr>
            <td><?php echo lang('edit_user_phone_label', 'phone');?></td>
            <td><?php echo form_input($phone);?></td>
      </tr>

      <tr>
            <td><?php echo lang('edit_user_password_label', 'password');?></td>
            <td><?php echo form_input($password);?></td>
      </tr>

      <tr>
            <td><?php echo lang('edit_user_password_confirm_label', 'password_confirm');?></td>
            <td><?php echo form_input($password_confirm);?></td>
      </tr>
	</table>
      <?php if ($this->ion_auth->is_admin()): ?>
          <h3 style="font-size:18px;text-indent:10px"><?php echo lang('edit_user_groups_heading');?></h3>
		  
          <?php foreach ($groups as $group):?>
		  <div class="span2">
				<label class="checkbox lightfont">
              <?php
                  $gID=$group['id'];
                  $checked = null;
                  $item = null;
                  foreach($currentGroups as $grp) {
                      if ($gID == $grp->id) {
                          $checked= ' checked="checked"';
                      break;
                      }
                  }
              ?>
			 <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
              <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
              </label></div>
          <?php endforeach?>

      <?php endif ?>

      <?php echo form_hidden('id', $user->id);?>
      <?php echo form_hidden($csrf); ?>

      
</div>                       
                                <div class="form-actions">              
							<button type="submit" class="btn blue"><i class="icon-ok"></i> Save User</button>	
</div>							
	 
<?php echo form_close();?>				
									
						
						     
							
						
						<script type="text/javascript">


function prints(){

var m  =  document.getElementById('print').innerHTML;
var s  =  document.body.innerHTML;

document.body.innerHTML= document.getElementById('print').innerHTML;

 window.print();

document.body.innerHTML = s;
}

</script>
						
						    

                        
					</div>
					</div>
					</div>
											<!-- END FORM-->                
									
								
								</div>
					
							
				
				
				
				
				
				
				
				
				                
				<!-- END PAGE CONTENT-->     

				
			</div>
			<!-- END PAGE CONTAINER-->
		</div>
		<!-- END PAGE --> 
		
		<script>
		
$(function() {
    $("#startdate").datepicker({changeMonth:true,changeYear:true,dateFormat: 'dd-mm-yy'});		
	// $("#validity").timepicker();		
	$("#enddate").datepicker({changeMonth:true,changeYear:true,dateFormat: 'dd-mm-yy'});		
	
});
</script>