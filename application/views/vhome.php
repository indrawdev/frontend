<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="ui items">
	<?php foreach ($lapangan->result() as $val) : ?>
	<div class="item">
		<div class="image">
			<img src="<?php echo 'http://localhost/labfutsal/uploads/' . $val->fs_photo_lapangan; ?>">
		</div>
		<div class="content">
			<a class="header"><?php echo $val->fs_nama_lapangan; ?></a>
			<div class="meta">
				<span>Description</span>
			</div>
			<div class="description">
				<p><?php echo $val->fs_keterangan_lapangan; ?></p>
			</div>
			<div class="extra">
				<a href="<?php echo base_url() . 'lapangan/detail/' . $val->fs_kode_lapangan; ?>" class="ui primary button">Booking</a>
			</div>
		</div>
	</div>
	<?php endforeach; ?>
</div>