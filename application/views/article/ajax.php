<div class="modal fade" id="konfirmasiHapus" role="dialog">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
        <div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
	      <h3 style="display:block; text-align:center;">Apakah Anda Yakin Hapus Data Ini ?</h3>
	      
	      <div class="col-md-6">
	        <button class="form-control btn btn-primary hapus-dataArticle"> <i class="glyphicon glyphicon-ok-sign"></i> Ya</button>
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
  		tampilArticletrending();
  		tampilArticle();
  		<?php
			if ($this->session->flashdata('msg') != '') {
				echo "effect_msg();";
			}
			if ($this->session->flashdata('msgsort') != '') {
				echo "effect_msg_sort();";
			}		
		?>
  	}

  	function refresh() {
		$('#list-data').DataTable({
			"responsive":true
		});
	}
	function refreshtrending() {
		$('#list-data-trending').DataTable({
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
	function effect_msg_sort() {
		// $('.msg').hide();
		$('.msgsort').show(1000);
		setTimeout(function() { $('.msgsort').fadeOut(1000); }, 3000);
	}

	// Film
	function tampilArticle() {
		$.get('<?php echo base_url('Article/tampil'); ?>', function(data) {
			$('#list-data').dataTable().fnDestroy();
			$('#data-article').html(data);
			refresh();
		});
	}

	function tampilArticletrending() {
		$.get('<?php echo base_url('Article/tampiltrending'); ?>', function(data) {
			$('#list-data-trending').dataTable().fnDestroy();
			$('#data-article-trending').html(data);
			refreshtrending();
		});
	}

	var id_article;
	$(document).on("click", ".konfirmasiHapus-article", function() {
		id_article = $(this).attr("data-id");
	})
	$(document).on("click", ".hapus-dataArticle", function() {
		var id = id_article;
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('Article/delete'); ?>",
			data: "id=" +id
		})
		// alert(id)
		.done(function(data) {
			$('#konfirmasiHapus').modal('hide');
			tampilArticle();
			$('.msg').html(data);
			effect_msg();
		})
	})

	function trend(id){
        $.ajax({
          url: '<?=site_url();?>Article/prosesTrending', //calling this function
          data:{id:id},
          type:'POST',
          cache: false,

      success: function(data) {
           alert("success");
           location.reload();
        }
      });
    }
    function notrend(id){
	    $.ajax({
	      url: '<?=site_url();?>Article/prosesNoTrending', //calling this function
	      data:{id:id},
	      type:'POST',
	      cache: false,

	  success: function(data) {
	       alert("success");
	       location.reload();
	    }
	  });
	}
	
</script>