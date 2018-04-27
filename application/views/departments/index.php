<h2><?php echo $title; ?></h2>
<br>
<br>
<!-- <div class="container"> -->
    <div class="row-fluid">
        <div class="col-12">
            <table id="departments" cellpadding="0" cellspacing="0" class="table table-striped table-bordered" width="100%">
                <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th  class="text-center">Department Name</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>
                          <!--  1&nbsp; -->
                          <a href="#"><i class="mdi mdi-pencil"></i></a>
                          <a href="#"><i class="mdi mdi-delete"></i></a>
                          1
                      </td>
                      <td>
                        <p>Admin & Finance</p>
                    </td>
                </tr>
                <tr>
                    <td>
                     <!--  2&nbsp; -->
                     <a href="#"><i class="mdi mdi-pencil"></i></a>
                     <a href="#"><i class="mdi mdi-delete"></i></a>
                     2
                 </td>
                 <td>
                    <p>ERO</p>
                </td>
            </tr>
            <tr>
                <td>
                    <!-- 3&nbsp; -->
                    <a href="#"><i class="mdi mdi-pencil"></i></a>
                    <a href="#"><i class="mdi mdi-delete"></i></a>
                    3
                </td>
                <td>
                    <p>Traning Team</p>
                </td>
            </tr>
        </tbody>
    </table>
    <br>
    <a class="btn btn-primary" id="create"><i class="mdi mdi-plus-circle"></i>&nbsp;Create new department</a>
</div>
</div>
<!-- </div> -->

<!-- javaScript -->
<link href="<?php echo base_url();?>assets/DataTable/DataTables-1.10.16/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<script type="text/javascript" src="<?php echo base_url();?>assets/DataTable//DataTables-1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/DataTable//DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootbox-4.4.0.min.js"></script>
<!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->


<script type="text/javascript">
    $(document).ready(function() {
    //Transform the HTML table in a fancy datatable
    $('#departments').dataTable({
        stateSave: true,
    });
    $("#departments tbody").on('click', '.confirm-delete',  function(){
        var id = $(this).parent().data('id');
        var link = "<?php echo base_url();?>users/delete/" + id;
        $("#lnkDeleteUser").attr('href', link);
        $('#frmConfirmDelete').modal('show');
    });

    $("#departments tbody").on('click', '.reset-password',  function(){
        var id = $(this).parent().data('id');
        var link = "<?php echo base_url();?>users/reset/" + id;
        $("#formResetPwd").prop("action", link);
        $('#frmResetPwd').modal('show');
    });
    $('#create').click(function() {
      bootbox.prompt({
          title: "Add new department",
          inputType: 'text',
          callback: function (result) {
              $('#txtAge').val(result);
          }
      });
  });
        // $('#create').click(function(){
        //     swal("Write something here:", {
        //       content: "input",
        //     })
        //     .then((value) => {
        //       swal(`You typed: ${value}`);
        //     });
        // })
    });

</script>