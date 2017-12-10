<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="ui form">
	<form action="<?php echo base_url('lapangan/addcart'); ?>" method="post">
	<img class="ui fluid image" src="<?php echo 'http://localhost/labfutsal/uploads/' . $lapangan->fs_photo_lapangan; ?>">
	<br>
	<div class="ui tiny images">
		<?php foreach ($photo->result() as $val) : ?>
			<img class="ui image" src="<?php echo 'http://localhost/labfutsal/uploads/' . $val->fs_photo_lapangan; ?>">
		<?php endforeach; ?>
	</div>
	<table class="ui table">
		<thead>
			<tr>
				<th>Kode</th>
				<th>Nama</th>
				<th>Keterangan</th>
			</tr>
		</thead>
		<tbody>
	    	<tr>
	    		<td><?php echo $lapangan->fs_kode_lapangan; ?></td>
	    		<td><?php echo $lapangan->fs_nama_lapangan; ?></td>
	    		<td><?php echo $lapangan->fs_keterangan_lapangan; ?></td>
	    	</tr>
	    </tbody>
	</table>
	<div class="field">
		<label>Jam</label>
		<select name="fs_tarif" class="ui search dropdown">
			<option value="">Pilih Jam</option>
			<?php foreach ($tarif->result() as $val) : ?>
				<option value="<?php echo $val->fs_kode_tarif . '-' . $val->fn_harga . '-' . $val->ft_jam_mulai; ?>"><?php echo $val->ft_jam_mulai; ?> | <?php echo $val->ft_jam_selesai; ?></option>
			<?php endforeach; ?>
		</select>
	</div>
	<div class="field">
		<label>Keterangan</label>
		<textarea name="fs_keterangan"></textarea>
	</div>
	<input type="hidden" name="fs_kode_lapangan" value="<?php echo $lapangan->fs_kode_lapangan; ?>">
	<input type="hidden" name="fs_nama_lapangan" value="<?php echo $lapangan->fs_nama_lapangan; ?>">
	<button class="fluid ui button positive">CHECKOUT</button>
	</form>
</div>