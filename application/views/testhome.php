<?php
/**
 * This view displays the list of users.
 * @copyright  Copyright (c) 2014-2018 Benjamin BALET
 * @license    http://opensource.org/licenses/AGPL-3.0 AGPL-3.0
 * @link       https://github.com/bbalet/skeleton
 * @since      1.0.0
 */
?>

<div id="container">
	<div class="row-fluid">
		<div class="col-12">

			<h2>List of items</h2>

			<table id="users" cellpadding="0" cellspacing="0" class="table table-striped table-bordered" width="100%">
				<thead>
					<tr>
						<th>ID</th>
						<th>Firstname</th>
						<th>Lastname</th>
						<th>Login</th>
						<th>Email</th>
						<th>Role</th>
					</tr>
				</thead>
				<tbody>
						
							
				</tbody>
			</table>
		</div>
	</div>



<link href="<?php echo base_url();?>assets/DataTable/DataTables-1.10.16/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<script type="text/javascript" src="<?php echo base_url();?>assets/DataTable//DataTables-1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/DataTable//DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
    //Transform the HTML table in a fancy datatable
    $('#users').dataTable({
    	stateSave: true,
    });
    //$("#frmResetPwd").alert();
    //$("#frmConfirmDelete").alert();

    //On showing the confirmation pop-up, add the user id at the end of the delete url action
    /*$('#frmConfirmDelete').on('show', function() {
        var link = "<?php echo base_url();?>users/delete/" + $(this).data('id');
        $("#lnkDeleteUser").attr('href', link);
      });*/

    //Display a modal pop-up so as to confirm if a user has to be deleted or not
    //We build a complex selector because datatable does horrible things on DOM...
    //a simplier selector doesn't work when the delete is on page >1
    $("#users tbody").on('click', '.confirm-delete',  function(){
    	var id = $(this).parent().data('id');
    	var link = "<?php echo base_url();?>users/delete/" + id;
    	$("#lnkDeleteUser").attr('href', link);
    	$('#frmConfirmDelete').modal('show');
    });

    $("#users tbody").on('click', '.reset-password',  function(){
    	var id = $(this).parent().data('id');
    	var link = "<?php echo base_url();?>users/reset/" + id;
    	$("#formResetPwd").prop("action", link);
    	$('#frmResetPwd').modal('show');
    });

    //Prevent to load always the same content (refreshed each time)
    /*$('#frmConfirmDelete').on('hidden', function() {
        $(this).removeData('modal');
    });
    $('#frmResetPwd').on('hidden', function() {
        $(this).removeData('modal');
      });*/
    });
  </script>
