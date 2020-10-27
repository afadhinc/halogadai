<div class="modal fade" id="konfirmasiHapus" role="dialog">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
        <div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
	      <h3 style="display:block; text-align:center;">Apakah Anda Yakin Hapus Data Ini ?</h3>
	      
	      <div class="col-md-6">
	        <button class="form-control btn btn-primary hapus-dataUser"> <i class="glyphicon glyphicon-ok-sign"></i> Ya</button>
	      </div>
	      <div class="col-md-6">
	        <button class="form-control btn btn-danger" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Tidak</button>
	      </div>
	      
	    </div>
    </div>
  </div>
</div>
<script>
  	// var MyTable = $('#list-data').DataTable();

  	// window.onload = function(){
  		$(document).ready(function() {
  			tampilUserAjax();	
  		});
  		
  		<?php
			if ($this->session->flashdata('msg') != '') {
				echo "effect_msg();";
			}
		?>
  	// }

  	function refresh() {
		// $('#list-data').DataTable({
			// "responsive":true
		// });

	}

	function effect_msg_form() {
		// $('.form-msg').hide();
		$('.form-msg').show(1000);
		setTimeout(function() { $('.form-msg').fadeOut(1000); }, 3000);
	}

	function effect_msg() {
		// $('.msg').hide();
		$('.msg').show(1000);
		setTimeout(function() { $('.msg').fadeOut(1000); }, 3000);
	}

	// Film
	function tampilUserAjax(){

	    $('#list-data-user').DataTable( {
			"processing": true,
			"serverSide": true,
			"responsive":true,
			"ajax":{
				url :"<?php echo base_url('User/tampilAjax'); ?>", // json datasource
				type: "post",  // method  , by default get
				error: function(){  // error handling
					$(".list-data-user-error").html("");
					$("#list-data-user").append('<tbody class="list-data-user-error"><tr><th colspan="3">No data found in the server</th></tr></tbody>');
					$("#list-data-user_processing").css("display","none");
					
				}
			}
		} );
		
	}
	// function tampilUser() {
	// 	$.get('<?php echo base_url('User/tampil'); ?>', function(data) {
	// 		$('#list-data').dataTable().fnDestroy();
	// 		$('#data-user').html(data);
	// 		refresh();
	// 	});
	// }

	var id_user;
	$(document).on("click", ".konfirmasiHapus-user", function() {
		id_user = $(this).attr("data-id");
	})
	$(document).on("click", ".hapus-dataUser", function() {
		var id = id_user;
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('User/delete'); ?>",
			data: "id=" +id
		})
		// alert(id)
		.done(function(data) {
			$('#konfirmasiHapus').modal('hide');
			tampilUserAjax();
			$('.msg').html(data);
			effect_msg();
		})
	})
	
</script>