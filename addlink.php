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
											<div class="caption">Link Addition</div>
											<div class="tools">
												<a href="javascript:;" class="collapse"></a>
											
												<a href="javascript:;" class="reload"></a>
												
											</div>
										</div>
										<div class="portlet-body form">
									           
<table>
<tr>
<input type="hidden" name="updateid" id="updateid"/>
<td><label class="col-md-3 control-label">Add Links:</label></td>
<td><input type="text" name="linksub" id="linksub" class="form-control"/><td>
<td><label class="col-md-3 control-label">Link Name:</label></td>
<td><input type="text" name="linkname" id="linkname" class="form-control"/><td>
<td><label class="col-md-3 control-label">Search:</label></td>
<td><input type="text" id="search" name="search" onkeyup="searchlink()"/></td>
</tr>
<tr>
<td><button onclick="showAjax()" class="btn green">Save Link</button></td>
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
                                                <th style="text-align:center"> Links </th>
                                                <th style="text-align:center"> Name </th>
												<th style="text-align:center"> Action </th>
												<th style="text-align:center"> Delete </th>
												</tr>
												</thead>
												<tbody id="link">
												<?php foreach($link as $link2)
												{
													?>
													<tr>
													<td style="font-size:18px"><?php echo $link2['links'];?></td>
													<td style="font-size:18px"><?php echo $link2['linknames'];?></td>
													<td style="text-align:center"><button onclick="editajax('<?php echo $link2['id'];?>')" class="btn red">Edit Link</button></td>
													<td style="text-align:center"><button onclick="deleteajax('<?php echo $link2['id'];?>')" class="btn red">Delete Link</button></td>
													</tr>
													<?php
												}?>
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
	
		  //alert('Data Saved Succefully');
          $("#linksub").val(''); 
		  $("#linkname").val('');
		  $('#updateid').val('');
	   
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
  function searchlink()
	   {
		   var links=$('#search').val();
		   
		  $.post("<?php echo base_url('auth/searchlink');?>",{links:links},function(data)
			  {
				  $('#link').html(data);
				  //$('#search').val('');
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