<?php
  $no=1;
  foreach ($dataUser->result() as $user) {
    $tamp=$user->foto;
    ?>
    <tr>
      <td><?php echo $no; ?></td>
      <td>
      	<div class="break-word">
      		<?php echo $user->username; ?>
      	</div>
  	  </td>
      <td>
      	<div class="break-word">
      		<?php echo $user->nama; ?>
      	</div>
      	
  	  </td>
      <td>
      	<div class="break-word">
      		<?php echo $user->email; ?>
      	</div>
      	
  	  </td>
      <td><?php echo $user->tanggal_lahir; ?></td>
      <td>
        <div class="break-word">
        <img class="profile-user-img img-responsive img-square"  src="<?php
            if($tamp == ''){
          echo base_url('assets/img/not.png');
          // echo file_exists('assets/img/not.png');
        }
          else
          {
            echo $this->config->item('base_url'); ?>assets/img/imgUser/<?php echo $tamp; 

          }
         ?>" alt="User profile picture">
         </div>
      </td>
      <td><?php echo $user->alamat; ?></td>
      <td><?php echo $user->domisili== ''?'-':$user->domisili; ?></td> 
      <td><?php echo $user->kota; ?></td>
      <td><?php echo $user->kodepos; ?></td>
      <td><?php echo $user->telephone== ''?'-':$user->telephone; ?></td>
      <td><?php echo $user->handphone; ?></td>
      <td><?php echo $user->pekerjaan; ?></td>

      <?php if ($user->jenis_kelamin == 1) { ?>
        <td>Laki Laki</td>
      <?php }elseif ($user->jenis_kelamin == 0) { ?>
        <td>Wanita</td>
      <?php } ?>

      <?php if ($user->status == 1) { ?>
        <td>Menikah</td>
      <?php }elseif ($user->status == 0) { ?>
        <td>Lajang</td>
      <?php } ?>

      <?php if ($user->login_form == 1) { ?>
        <td>Web</td>
      <?php }elseif ($user->login_form == 2) { ?>
        <td>Facebook</td>
      <?php } elseif ($user->login_form == 3) { ?>
        <td>Twiter</td>
      <?php } ?>

      <td class="text-center" >
        <!-- <a href="<?php echo base_url() ?>user/detail/<?php echo $user->id_user ?>">
          
          <button class="btn btn-info">
            <input type="hidden" name="id_user" value="<?php echo $user->id_user ?>">
            <i class="fa fa-info-circle"></i> Detail
          </button>
        </a> -->

        <a href="<?php echo base_url() ?>user/update/<?php echo $user->id_user ?>">

          <button class="btn btn-warning">
            <input type="hidden" name="id_user" value="<?php echo $user->id_user ?>">
            <i class="glyphicon glyphicon-repeat"></i> Update
          </button>
        </a>
      
      </td>
    </tr>
    <?php
    $no++;
  }
?>
