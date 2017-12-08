<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="row">
	<?php foreach ($lapangan->result() as $val) : ?>
	<div class="col-md-3">
		<img src="<?php echo 'http://localhost/labfutsal/uploads/' . $val->fs_photo_lapangan; ?>" class="img-responsive img-thumbnail" />
		<p><?php echo $val->fs_nama_lapangan; ?></p>
		<input type="hidden" name="fs_kode_lapangan" value="<?php echo $val->fs_kode_lapangan; ?>" />
		<input type="hidden" name="fs_nama_lapangan" value="<?php echo $val->fs_nama_lapangan; ?>" />
		<a class="btn btn-success" href="<?php echo base_url("lapangan/detail/".$val->fs_kode_lapangan.""); ?>">Booking</a>
	</div>
	<?php endforeach; ?>
</div>