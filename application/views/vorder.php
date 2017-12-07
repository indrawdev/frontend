<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<form>
<div class="row">
	<div class="col-md-12">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php $i = 1; ?>
				<?php foreach ($this->cart->contents() as $val) : ?>
				<tr>
					<td></td>
				</tr>
				<?php $i++; ?>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>
</form>