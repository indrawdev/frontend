<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<h2>Checkout</h2>
<table class="ui single line table">
	<thead>
		<tr>
			<th>No</th>
			<th>Kode</th>
			<th>Nama</th>
			<th>Harga</th>
			<th>Aksi</th>
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
			<td><a href="<?php echo base_url() . 'checkout/removecart/' . $item['rowid']; ?>">Hapus</a></td>
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
			<th></th>
		</tr>
	</tfoot>
</table>
<a href="<?php echo base_url(); ?>" class="ui left floated button yellow">Kembali</a>
<a href="<?php echo base_url('billing'); ?>" class="ui right floated button green">Lanjut</a>