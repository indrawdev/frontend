<h2>Konfirmasi Pembayaran</h2>
<form class="ui form" action="<?php echo base_url('konfirmasi/save'); ?>" method="post">
	<div class="field">
		<label>No Order</label>
		<input name="fs_order" placeholder="No Order" type="text">
	</div>
	<div class="field">
		<label>Bank Tujuan</label>
		<select name="fs_bayar" class="ui search dropdown">
			<option value="">Pilih Bank Tujuan</option>
			<?php foreach ($bank->result() as $val) : ?>
				<option value="<?php echo $val->fs_kode_pembayaran; ?>"><?php echo $val->fs_nama_bank; ?> | <?php echo $val->fs_no_rekening; ?></option>
			<?php endforeach; ?>
		</select>
	</div>
	<div class="field">
		<label>Nominal Transfer</label>
		<input name="fn_nominal" placeholder="Nominal Transfer" type="text">
	</div>
	<div class="field">
		<label>Nama (sesuai buku tabungan)</label>
		<input name="fs_nama_transfer" placeholder="Nama (sesuai buku tabungan)" type="text">
	</div>
	<button class="ui right floated orange button">Konfirmasi</button>
</form>