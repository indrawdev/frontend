<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<h2>Billing</h2>
<table class="ui single line table">
	<thead>
		<tr>
			<th>No</th>
			<th>Kode</th>
			<th>Nama</th>
			<th>Harga</th>
		</tr>
	</thead>
	<tbody>
		<?php $i = 1; ?>
		<?php foreach ($this->cart->contents() as $item) : ?>
		<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $item['id']; ?></td>
			<td><?php echo $item['name']; ?>
				<br>
				<?php foreach ($this->cart->product_options($item['rowid']) as $option_name => $option_value) : ?>
				<small><?php echo $option_name; ?> : <?php echo $option_value; ?><br></small>
				<?php endforeach; ?>
			</td>
			<td><?php echo number_format($item['price']); ?></td>
		</tr>
		<?php $i++; ?>
	<?php endforeach; ?>
	</tbody>
	<tfoot>
		<tr>
			<th>Total</th>
			<th></th>
			<th></th>
			<th><?php echo number_format($this->cart->total()); ?></th>
		</tr>
	</tfoot>
</table>
<form class="ui form" action="<?php echo base_url('billing/order'); ?>" method="post">
	<h4 class="ui dividing header">Information</h4>
	<div class="field">
		<label>Nama Lengkap</label>
		<div class="two fields">
			<div class="field">
				<input name="fs_nama_depan" placeholder="Nama Depan" type="text">
			</div>
			<div class="field">
				<input name="fs_nama_belakang" placeholder="Nama Belakang" type="text">
			</div>
		</div>
	</div>
	<div class="field">
		<label>Kontak</label>
		<div class="fields">
			<div class="ten wide field">
				<input name="fs_no_handphone" placeholder="Handphone" type="text">
			</div>
			<div class="six wide field">
				<input name="fs_email" placeholder="Email" type="text">
			</div>
		</div>
	</div>
	<input type="hidden" name="fn_total" value="<?php echo $this->cart->total(); ?>">
	<?php foreach ($this->cart->contents() as $item) : ?>
		<input type="hidden" name="fs_order[]" value="<?php echo $item['id'].'-'.$item['price']; ?>">
	<?php endforeach; ?>
	<button class="fluid ui button positive">ORDER</button>
</form>