<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Metronic | Login Page</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<meta content="" name="description" />
<meta content="" name="author" />
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="../../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="../../assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
<link href="../../assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="../../assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
<link href="../../assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="../../assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
<link href="../../assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="../../assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="assets/plugins/select2/select2_metro.css" />
<link href="../../assets/css/pages/login.css" rel="stylesheet" type="text/css"/>
<link rel="shortcut icon" href="favicon.ico" />
</head>
<body class="login">
<div class="page-content"> 
  <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
  <div id="portlet-config" class="modal hide">
    <div class="modal-header">
      <button data-dismiss="modal" class="close" type="button"></button>
      <h3>portlet Settings</h3>
    </div>
    <div class="modal-body">
      <p>Here will be a configuration form</p>
    </div>
  </div>
  <div class="container-fluid">
    
    <div class='row-fluid'>
      <div class='span1'></div>
      <div class="span3 ">
        <div class="control-group"> </div>
      </div>
    </div>
    <br>
    <div class="row-fluid">
      <div class="span12">
        <div class="tabbable tabbable-custom boxless">
          <div class="tab-content1">
            <div class="tab-pane active" id="tab_1">
              <div class="portlet box blue">
                <div class="portlet-title">
                  <div class="caption">Create New User</div>
                  <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="javascript:;" class="reload"></a> </div>
                </div>
              </div>
              <div class="row-fluid">
                <div class="span3 ">
                  <div class="content" style="width:580px">
  <h1><?php //echo lang('create_user_heading');?></h1>
  <p><?php //echo lang('create_user_subheading');?></p>
  <div id="infoMessage"><?php echo $message;?></div>
  <?php echo form_open("auth/create_user");?> 
  
  
  <div class="control-group">
  <?php //echo $group;?>
                                <label class="control-label" for="firstName">Employee Name</label>
                                <div class="controls " style="font-size:13px">
                                  <select name="emp_id" id="emp_id"  style="width:270px;"    data-placeholder="" class="chosen " multiple="multiple" tabindex="6" style="font-size:10px">
                                  <optgroup label="">
                                  <?php  $con=1;                                     
							             foreach ($usgtest as $key=>$usg) { ?>
                                  <option style="width:300px" value='<?php echo $usg['emp_id'] ;?>'><?php echo $usg['emp_name'] ;?></option>
                                  <?php } ?>
                                  </optgroup>
                                  </select>
                                </div>
                              </div>
  
  
  
  
  
  
  
  
  <div class="control-group">
    <label class="control-label"><?php echo lang('create_user_fname_label', 'first_name');?></label>
    <div class="controls">
      <div class="input-icon left"> <i class="icon-font"></i> <?php echo form_input($first_name);?> </div>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label"><?php echo lang('create_user_lname_label', 'last_name');?></label>
    <div class="controls">
      <div class="input-icon left"> <i class="icon-font"></i> <?php echo form_input($last_name);?> </div>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label"><?php echo lang('create_user_company_label', 'company');?></label>
    <div class="controls">
      <div class="input-icon left"> <i class="icon-font"></i> <?php echo form_input($company);?> </div>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label"><?php echo lang('create_user_email_label', 'email');?></label>
    <div class="controls">
      <div class="input-icon left"> <i class="icon-font"></i> <?php echo form_input($email);?> </div>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label"><?php echo lang('create_user_phone_label', 'phone');?></label>
    <div class="controls">
      <div class="input-icon left"> <i class="icon-font"></i> <?php echo form_input($phone);?> </div>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label"><?php echo lang('create_user_password_label', 'password');?></label>
    <div class="controls">
      <div class="input-icon left"> <i class="icon-font"></i> <?php echo form_input($password);?> </div>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label"> <?php echo lang('create_user_password_confirm_label', 'password_confirm');?></label>
    <div class="controls">
      <div class="input-icon left"> <i class="icon-font"></i> <?php echo form_input($password_confirm);?> </div>
    </div>
  </div>
  <p><?php echo form_submit('submit', lang('create_user_submit_btn'));?></p>
  <?php echo form_close();?> </div> 
                </div>
                
                </div>
              </div>
              
             
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
	$("#bstate_date").datepicker({changeMonth:true,changeYear:true,dateFormat: 'yy-mm-dd'});		
			
});
</script>
<div class="copyright"> 2015 &copy; MHCRC jabalpur. Admin Dashboard Template. </div>
<script src="../../assets/plugins/jquery-1.10.1.min.js" type="text/javascript"></script> 
<script src="../../assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script> 
<script src="../../assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script> 
<script src="../../assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
<script src="../../assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript" ></script> 
<script src="../../assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script> 
<script src="../../assets/plugins/jquery.blockui.min.js" type="text/javascript"></script> 
<script src="../../assets/plugins/jquery.cookie.min.js" type="text/javascript"></script> 
<script src="../../assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script> 
<script src="../../assets/plugins/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script> 
<script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script> 
<script src="../../assets/scripts/app.js" type="text/javascript"></script> 
<script src="../../assets/scripts/login.js" type="text/javascript"></script> 
<script src="../../assets/plugins/jquery-migrate-1.2.1.min.js'; ?>" type="text/javascript"></script> 
<script src="../../assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js'; ?>" type="text/javascript"></script> 
<script src="../../assets/plugins/bootstrap/js/bootstrap.min.js'; ?>" type="text/javascript"></script> 
<script src="../../assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js'; ?>" type="text/javascript" ></script> 
<link rel="stylesheet" href="../../assets/plugins/chosen-bootstrap/chosen/chosen.css" type="text/css">
<script type="text/javascript" src="../../assets/plugins/chosen-bootstrap/chosen/chosen.jquery.min.js"></script> 
<script type="text/javascript" src="../../assets/plugins/select2/select2.min.js"></script> 


<script>
		jQuery(document).ready(function() {     
		  App.init();
		  Login.init();
		});
	</script>
</body>
</html>
