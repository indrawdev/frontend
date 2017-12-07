<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="row">
	<form>
	<?php foreach ($lapangan->result() as $val) : ?>
	<div class="col-md-3">
		<img src="<?php echo 'http://localhost/labfutsal/uploads/' . $val->fs_photo_lapangan; ?>" class="img-responsive img-thumbnail" />
		<p><?php echo $val->fs_nama_lapangan; ?></p>
		<input type="hidden" name="fs_kode_lapangan" value="<?php echo $val->fs_kode_lapangan; ?>" />
		<input type="hidden" name="fs_nama_lapangan" value="<?php echo $val->fs_nama_lapangan; ?>" />
		<button type="button" class="btn btn-success">Booking</button>
	</div>
	<?php endforeach; ?>
	<form>
</div>