<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE CONTAINER-->
			<div class="container-fluid">
				<!-- BEGIN PAGE HEADER-->   
				<div class="row-fluid">
					
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div class="row-fluid">
					<div class="span12">
						<div class="tabbable tabbable-custom boxless">
							
							<div class="tab-content">
								<div class="tab-pane active" id="tab_1">
									<div class="portlet box blue">
										<div class="portlet-title">
											<div class="caption">Link Allotment to Group</div>
											<div class="tools">
												<a href="javascript:;" class="collapse"></a>
											
												<a href="javascript:;" class="reload"></a>
												
											</div>
										</div>
										<div class="portlet-body form">
									           
<table>
<tr>
<input type="hidden" name="updateid" id="updateid"/>
<td><label class="col-md-3 control-label">Group List:</label></td>
<td><select name="grouplist" id="grouplist" onchange="groupdata(this.value)">
<option>Select Group</option>
<?php
foreach($grouplist as $glist)
{?>
<option value="<?php echo $glist['id'];?>"><?php echo $glist['name'];?></option>
<?php
}
?></select><td>
<td><label class="col-md-3 control-label">Select List:</label></td>
<td><select name="list" id="list">
<option>Select List</option>
<?php
foreach($linklist as $list)
{?>
<option value="<?php echo $list['id'];?>"><?php echo $list['list'];?></option>
<?php
}
?></select><td>
<td><label class="col-md-3 control-label">Links List:</label></td>
<td><select name="linkslist" id="linkslist">
<option>Select link</option>
<?php
foreach($linkslist as $llist)
{?>
<option value="<?php echo $llist['id'];?>"><?php echo $llist['links'];?></option>
<?php
}
?></select><td>
<td id="link">
</tr>
<tr>
<td><button onclick="submitajax()" class="btn green">Add Link</button></td>
</tr>
</table>
<?php echo form_close();?>    
											<!-- END FORM--> <br/>
											<div class="portlet box blue">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-cogs"></i>Links For Use</div>
										</div>
										<div class="portlet-body flip-scroll">
                                    <table class="table table-bordered table-striped table-condensed flip-content">
                                        <thead class="flip-content">
										<tr>
                                                <th style="text-align:center"> Group id </th>
												<th style="text-align:center"> Group Name </th>
												<th style="text-align:center"> Group List </th>
												<th style="text-align:center"> Group Link </th>
												<th style="text-align:center"> Delete </th>
												</tr>
												</thead>
												<tbody id="link1">
												
												</tbody>
												</table>
									</div>
								</div>
								
										
								
							</div>
						</div>
					</div>
				</div>
				<!-- END PAGE CONTENT-->         
			</div>
			
			
<script>
$(function() {
    $("#validity").datepicker({changeMonth:true,changeYear:true,dateFormat: 'dd-mm-yy'});		
	// $("#validity").timepicker();		
	$("#esivalidity").datepicker({changeMonth:true,changeYear:true,dateFormat: 'dd-mm-yy'});		
	$("#echsvalidityvalidity").datepicker({changeMonth:true,changeYear:true,dateFormat: 'dd-mm-yy'});		
});
</script>
			<script>
			function showData()
			{
			//$("#vdata").addClass('control-group');
			$('#vdata').removeClass('hide');
			//$('#td_id').removeClass('hide').addClass('new_class');
			alert('ss');
			}
			</script>
			
			<script>
			       

   </script>
   <script>
   function showAjax(){
		
		var link= $('#linksub').val();
		var linkname=$('#linkname').val();
		var updateid= $('#updateid').val();
		$.ajax({   
        type: "POST",  
        url: "<?php echo base_url('auth/showajax'); ?>",  
        data: "link="+link+"&updateid="+updateid+"&linkname="+linkname,
		 
        success: function(msg){  
		
	
          $("#link").html(msg); 
	
		  alert('Data Saved Succefully');
          $("#linksub").val(''); 
		  $("#linkname").val('');
		  $('#updateid').val('');
	   
        }  
            });
   }
		   
   </script>
   <script>
   function groupdata(id)
   {
	   $.ajax({   
        type: "POST",  
        url: "<?php echo base_url('auth/groupdata'); ?>",  
        data: "id="+id,
		 
        success: function(msg){  
		
	
          $("#link1").html(msg); 
		  //alert('Data Deleted Succefully');
          
	   
        }  
            });
   }
   </script>
   <script>
   function submitajax(){
		
		var grouplist= $('#grouplist').val();
		var linklist= $('#list').val();
		var linkslist=$('#linkslist').val();
		//var updateid= $('#updateid').val();
		$.ajax({   
        type: "POST",  
        url: "<?php echo base_url('auth/submitgroup_l'); ?>",  
        data: "grouplist="+grouplist+"&linklist="+linklist+"&linkslist="+linkslist,
		 
        success: function(msg){  
		
	
          $("#link").html(msg); 
	
	   
        }  
            });
   }
		   
   </script>
   <script>
   function deleteajax(id){
		
		
		$.ajax({   
        type: "POST",  
        url: "<?php echo base_url('auth/deleteajax'); ?>",  
        data: "id="+id,
		 
        success: function(msg){  
		
	
          $("#link").html(msg); 
	
		  alert('Data Deleted Succefully');
          
	   
        }  
            });
   }
		   
   </script>
   <script>
   function editajax(id)
   {
		 	  	$.ajax({   
        type: "POST",  
        url: "<?php echo base_url('auth/edit'); ?>",
        data: "id="+id,
		 
        success: function(msg){  
		           obj = JSON.parse(msg);
                   var link= obj.link;
				   var linkname= obj.linkname;
				   var updateid= obj.updateid;
                  
				    $('#linksub').val(link);
					$('#linkname').val(linkname);
				    $('#updateid').val(updateid);
	   
        }  
            });
   }
  
   </script>
      <script>
   (function () {
    var allowSubmit = true;
    frm.onsubmit = function () {
       if (allowSubmit)
           allowSubmit = false;
       else 
           return false;
    }
})();
   </script>