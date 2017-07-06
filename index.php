	<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div id="portlet-config" class="modal hide">
				<div class="modal-header">
					<button data-dismiss="modal" class="close" type="button"></button>
					<h3>Rejection Resion</h3>
				</div>
				<div class="modal-body">
					<p id='rejectionR'></p>
				</div>
			</div>
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE CONTAINER-->
			<div class="container-fluid">
				<!-- BEGIN PAGE HEADER-->   
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN STYLE CUSTOMIZER -->
						
						<!-- END BEGIN STYLE CUSTOMIZER -->    
						<h3 class="page-title">
						       DASHBOARD
							<small>Admin</small>
						</h3>
						<!--
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a href="index.html">Home</a> 
								<span class="icon-angle-right"></span>
							</li>
							<li>
								<a href="#">Form Stuff</a>
								<span class="icon-angle-right"></span>
							</li>
							<li><a href="#">Form Layouts</a></li>
						</ul>      -->
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				
				<div id="dashboard">
					<!-- BEGIN DASHBOARD STATS -->
					<div class="row-fluid">
						<div class="span3 responsive" data-tablet="span6" data-desktop="span3">
							<div class="dashboard-stat blue">
								<div class="visual">
									<i class=" icon-group"></i>
								</div>
								<div class="details">
									<div class="number">
										<?php echo count($users);?>
									</div>
									<div class="desc" id="div1" onclick="hideshow(this.id)" >                           
										Users
									</div>
								</div>
								<a class="more" onclick="hideshow('div1')">
								View more <i class="m-icon-swapright m-icon-white"></i>
								</a>                 
							</div>
						</div>
						<div class="span3 responsive" data-tablet="span6" data-desktop="span3">
							<div class="dashboard-stat green">
								<div class="visual">
									<i class=" icon-arrow-right"></i>
								</div>
						
								<div class="details">
									<div class="number"><td><?php echo count($resource);?></td></div>
									<div class="desc"id="div2"onclick="hideshow(this.id)">Discharge Today</div>
								</div>
								<a class="more" onclick="hideshow('div2')">
								View more <i class="m-icon-swapright m-icon-white"></i>
								</a>                 
							</div>
						</div>
						<div class="span3 responsive" data-tablet="span6  fix-offset" data-desktop="span3">
							<div class="dashboard-stat purple">
								<div class="visual">
									<i class="  icon-hospital"></i>
								</div>
								<div class="details">
									<div class="number"><?php echo count($patient);?></div>
									<div class="desc"id="div3"onclick="hideshow(this.id)">In-patient</div>
								</div>
								<a class="more" onclick="hideshow('div3')">
								View more <i class="m-icon-swapright m-icon-white"></i>
								</a>                 
							</div>
						</div>
						<div class="span3 responsive" data-tablet="span6" data-desktop="span3">
							<div class="dashboard-stat yellow">
								<div class="visual">
									<i class="icon-medkit"></i>
								</div>
								<div class="details">
									<div class="number"><?php echo count($doctor);?></div>
									<div class="desc" id="div4" onclick="hideshow(this.id)">Doctors</div>
								</div>
								<a class="more" onclick="hideshow('div4')">
								View more <i class=" icon-medkit"></i>
								</a>                 
							</div>
						</div>
					</div>
					<!-- END DASHBOARD STATS -->
					<div class="clearfix"><!--for table next-->
					<div class="row-fluid" id="table1">
					<div class="span12">
						<!-- BEGIN EXAMPLE TABLE PORTLET-->
						
								<div class="portlet-body no-more-tables">
								<table class="table-bordered table-striped table-condensed cf lightfont"  aria-describedby="sample_editable_1_info" id="sample_1">
									<thead class="cf">
										<tr align="left" class="lightfont800" style="background-color:#4b8df8;color:#fff">
										   <th ><?php echo lang('index_fname_th');?></th>
										   <th ><?php echo lang('index_lname_th');?></th>
										   <th ><?php echo lang('index_email_th');?></th>
										   <th ><?php echo lang('index_groups_th');?></th>
										   <th ><?php echo lang('index_status_th');?></th>
										   <th ><?php echo lang('index_action_th');?></th>
										</tr>
									</thead>
									
								<tbody >
								<?php foreach ($users as $user):?>
								<tr align="left">
											<td data-title="First Name"><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
											<td data-title="Last Name"><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
											<td data-title="Email"><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
											<td data-title="Groups" style="text-transform:uppercase">
											<?php foreach ($user->groups as $group):?>
												<?php echo anchor("auth/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8')) ;?><br />
											<?php endforeach ?>
											</td>
											<td data-title="Status" ><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link')) : anchor("auth/activate/". $user->id, lang('index_inactive_link'));?></td>
											<!--<td data-title="Status" ><?php 
											// if($user->active == '1') { 
											// echo "<a class='text-info' href='auth/deactivate/'".$user->id."'>".lang('index_active_link')."</a>"; } 
											
											// else{
												
											// echo "<a class='text-error' href='auth/activate/'".$user->id."'>".lang('index_inactive_link')."</a>"; } 
											
											?></td>-->
											<td data-title="Action"><?php echo anchor("auth/edit_user/".$user->id, 'Edit') ;?></td>
										</tr>
								<?php endforeach;?>		
										</tbody>
										</table>
										
								</div>
										<div class="row-fluid">
										<div class="span6">
										<div class="dataTables_paginate paging_bootstrap pagination">
										
										<?php //echo anchor('auth/addnewuser', lang('index_create_user_link'))
										echo anchor('auth/create_user', lang('index_create_user_link'))
										//redirect('auth/addnew');
										
										?> 
										| <?php echo anchor('auth/create_group', lang('index_create_group_link'))?>
										</li>
										</ul>
										</div>
										</div>
										</div>
						</div>
					</div>
					
					<div class="clearfix">

					<div class="row-fluid" id="table2" style="display:none;">
					<div class="span6">
						<!-- BEGIN CONDENSED TABLE PORTLET-->
						
						
								<table class="table table-striped table-bordered table-advance table-hover lightfont">
									<thead class="cf">
										<tr class="lightfont800" style="background-color:#4b8df8;color:#fff">
											<th>#</th>
											<th>UHID</th>
											<th>REG</th>
											<th>Pt. Name</th>
											
										</tr>
									</thead>
									<tbody>
									
									<?php								
										$sno=1;
													
									foreach($resource as $ft1)
									{ ?>
									<tr>
									<td><?php echo $sno;?></td>
									<td><?php echo $ft1['admit_uhid'];?></td>
									<td><?php echo $ft1['admit_id'];?></td>
							        <td><?php echo $ft1['first_name']." ".$ft1['middle_name']." ".$ft1['last_name']?></td>	
							       
									
									</tr>
									<?php $sno++;} ?>
										
									</tbody>
								</table>
							
						<!-- END CONDENSED TABLE PORTLET-->
					</div>
					</div>
					<!-- delete page -->
					
					<div class="clearfix">
					<div class="row-fluid" id="table3" style="display:none;">
					<div class="span12">
						<!-- BEGIN CONDENSED TABLE PORTLET-->
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption"><i class="icon-picture"></i>In-patient Table</div>
								<div class="tools">
									<a href="<?php echo base_url().'admin/NURS0004/infra';?>" class="btn black">Infrastructure <i class="m-icon-swapright m-icon-white"></i></a>
								</div>
							</div>
							<div class="portlet-body">
								<table  class="table-bordered table-striped table-condensed cf lightfont">
									<thead class="cf">
										<tr class="lightfont800" style="background-color:#4b8df8;color:#fff">
											<th>#</th>
											<th>Name</th>
											<th>Admit Date</th>
											
										
										</tr>
									</thead>
									<tbody>
									<?php								
										$sno=1;														
									foreach($patient as $ft2)
									{ ?>
										<tr>
										<td><?php echo $sno;?></td>
									 <td><?php echo $ft2['first_name']." ".$ft2['middle_name']." ".$ft2['last_name']?></td>		
									<td><?php echo $ft2['admit_entrydt'];?></td>
										</tr>
										<?php $sno++;} ?>
									</tbody>
								</table>
							</div>
						</div>
						<!-- END CONDENSED TABLE PORTLET-->
					</div>
					</div>
					</div>
					<div class="clearfix">

					<div class="row-fluid" id="table4" style="display:none;">
					<div class="span12">
						<!-- BEGIN CONDENSED TABLE PORTLET-->
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption"><i class="icon-user-md"></i> All Doctors</div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									<a href="#portlet-config" data-toggle="modal" class="config"></a>
									<a href="javascript:;" class="reload"></a>
									<a href="javascript:;" class="remove"></a>
								</div>
							</div>
							<div class="portlet-body">
								<table class="table-bordered table-striped table-condensed cf lightfont">
									<thead class="cf">
										<tr class="lightfont800" style="background-color:#4b8df8;color:#fff">
											<th>#</th>
											<th>Doctor Name</th>
											<th>Specilist</th>
											<th>Timing</th>
											<th>Qualification</th>
											<th>Contact</th>
										</tr>
									</thead>
									<tbody>
									
									<?php								
									$sno=1;														
									foreach($doctor as $ft3){ ?>
										<tr>
										<td><?php echo $sno;?></td>
										<td><?php echo $ft3['doc_name'];?></td>
										<td><?php echo $ft3['specilist'];?></td>
										<td><?php echo $ft3['timeing'];?></td>
										<td><?php echo $ft3['qulification'];?></td>
										<td><?php echo $ft3['dr_contact'];?></td>
										</tr>
									<?php $sno++;} ?>
										
									</tbody>
								</table>
							</div>
						</div>
						<!-- END CONDENSED TABLE PORTLET-->
					</div></div></div>
					<!-- for using script-->
					
					
			<script>
				function hideshow(val){
					// alert(val);
					if(val == 'div1' ){
					
					document.getElementById('table1').style.display='block';
					document.getElementById('table2').style.display='none';
					document.getElementById('table3').style.display='none';
					document.getElementById('table4').style.display='none';
					}
					
					if(val == 'div2' ){
					
					document.getElementById('table1').style.display='none';
					document.getElementById('table2').style.display='block';
					document.getElementById('table3').style.display='none';
					document.getElementById('table4').style.display='none';
					}
					if(val == 'div3' ){
					
					document.getElementById('table1').style.display='none';
					document.getElementById('table2').style.display='none';
					document.getElementById('table3').style.display='block';
					document.getElementById('table4').style.display='none';
					}
					if(val == 'div4' ){
					
					document.getElementById('table1').style.display='none';
					document.getElementById('table2').style.display='none';
					document.getElementById('table3').style.display='none';
					document.getElementById('table4').style.display='block';
					}
					
				}
			</script>
				
			</div>
			<!-- END PAGE CONTAINER-->    
		</div>
		<!-- END PAGE -->
	</div>
				
				
			</div>
					
	</div>
				<!-- END PAGE CONTENT-->         
	</div>
			
		<script>
		function search()
		{
		var first_name= document.getElementById('first_name').value;
		var uhid= document.getElementById('uhid').value;
		var contact_no= document.getElementById('contact_no').value;
		var district= document.getElementById('district').value;
		var status= document.getElementById('status').value;
	
		   try {
	
			$.ajax({   
				type: "GET",  
				url: "<?php echo base_url('admin/BPLD0008/searchBplPatient'); ?>",  
				data: "first_name="+first_name+"&uhid="+uhid+"&contact_no="+contact_no+"&district="+district+"&status="+status, 
				 
				success: function(msg){  
					$("#bplresl").html(msg); 
			   
				}  
			}); 
			}
			catch (e) {
				alert(e);
			} 
		
		}
       </script>
	   
	   	<script>
		function genrateForm(uhid)
		{
		  try {
		
		   // var new_class_name1= document.getElementById('new_class_name1').value;
		   // var new_class_name2= document.getElementById('new_class_name2').value;
		
		   // var new_class_name=new_class_name1+" "+new_class_name2;
		   
		  $.ajax({   
			type: "GET",  
			url: "<?php echo base_url('admin/BPLD0008/bplForm'); ?>",  
			data: "uhid="+uhid, 
			 
			success: function(msg){  
				$("#addressdiv").html(msg); 
		   
			}  
		}); 
	    //alert(uhid);
		 // var win=window.open('form.php?name='+name+"&fa_hus_name="+fa_hus_name+"&patient_age="+patient_age+"&patient_gender="+state+"&state="+city+"&city="+district+"&tehsil="+tehsil+"&village="+village+"&address="+address+"&patient_cat="+patient_cat+"&employment="+employment+"&income="+income+"&card_no="+card_no+"&cardholdername="+cardholdername+"&pincode="+pincode+"&disease_cat="+disease_cat+"&desease="+desease, '_blank');
			  // win.focus();

		}
		catch (e) {
			alert(e);
		} 
		}
		
	
	</script>
	<script>
		function setRejection(resion)
		{
		$("#rejectionR").text(resion);
		}
    </script>

	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->   <script src="<?php echo base_url().'../assets/plugins/jquery-1.10.1.min.js'; ?>" type="text/javascript"></script>
	<script src="<?php echo base_url().'../assets/plugins/jquery-migrate-1.2.1.min.js'; ?>" type="text/javascript"></script>
	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
	<script src="<?php echo base_url().'../assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js'; ?>" type="text/javascript"></script>      
	<script src="<?php echo base_url().'../assets/plugins/bootstrap/js/bootstrap.min.js'; ?>" type="text/javascript"></script>
	<script src="<?php echo base_url().'../assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js'; ?>" type="text/javascript" ></script>
	<!--[if lt IE 9]>
	<script src="<?php echo base_url().'../assets/plugins/excanvas.min.js'; ?>"></script>
	<script src="<?php echo base_url().'../assets/plugins/respond.min.js'; ?>"></script>  
	<![endif]-->   
	<script src="<?php echo base_url().'../assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js'; ?>" type="text/javascript"></script>
	<script src="<?php echo base_url().'../assets/plugins/jquery.blockui.min.js'; ?>" type="text/javascript"></script>  
	<script src="<?php echo base_url().'../assets/plugins/jquery.cookie.min.js'; ?>" type="text/javascript"></script>
	<script src="<?php echo base_url().'../assets/plugins/uniform/jquery.uniform.min.js'; ?>" type="text/javascript" ></script>
	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script type="text/javascript" src="<?php echo base_url().'../assets/plugins/select2/select2.min.js'; ?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'../assets/plugins/data-tables/jquery.dataTables.min.js'; ?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'../assets/plugins/data-tables/DT_bootstrap.js'; ?>"></script>
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="<?php echo base_url().'../assets/scripts/app.js'; ?>"></script>
	<script src="<?php echo base_url().'../assets/scripts/table-advanced.js'; ?>"></script>     
	<script>
		jQuery(document).ready(function() {       
		   App.init();
		   TableAdvanced.init();
		});
	</script>
