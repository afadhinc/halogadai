<div class="modal fade" id="konfirmasiHapus" role="dialog">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
        <div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
	      <h3 style="display:block; text-align:center;">Apakah Anda Yakin Hapus Data Ini ?</h3>
	      
	      <div class="col-md-6">
	        <button class="form-control btn btn-primary hapus-dataSosmed"> <i class="glyphicon glyphicon-ok-sign"></i> Ya</button>
	      </div>
	      <div class="col-md-6">
	        <button class="form-control btn btn-danger" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Tidak</button>
	      </div>
	      
	    </div>
    </div>
  </div>
</div>
<script>
 //  	var MyTable = $('#list-data').dataTable({
	// 	  "paging": true,
	// 	  "lengthChange": true,
	// 	  "searching": true,
	// 	  "ordering": true,
	// 	  "info": true,
	// 	  "autoWidth": false
	// });

  	window.onload = function(){
  		tampilSosmed();
  		<?php
			if ($this->session->flashdata('msg') != '') {
				echo "effect_msg();";
			}
		?>
  	}

  	function refresh() {
		$('#list-data').DataTable({
			"responsive":true
		});
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
	function tampilSosmed() {
		$.get('<?php echo base_url('Sosmed/tampil'); ?>', function(data) {
			$('#list-data').dataTable().fnDestroy();
			$('#data-sosmed').html(data);
			refresh();
		});
	}

	var id_sosmed;
	$(document).on("click", ".konfirmasiHapus-sosmed", function() {
		id_sosmed = $(this).attr("data-id");
	})
	$(document).on("click", ".hapus-dataSosmed", function() {
		var id = id_sosmed;
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('Sosmed/delete'); ?>",
			data: "id=" +id
		})
		// alert(id)
		.done(function(data) {
			$('#konfirmasiHapus').modal('hide');
			tampilSosmed();
			$('.msg').html(data);
			effect_msg();
		})
	})
	
</script>