<div class="ui warning message">
	<i class="close icon"></i>
	<div class="header">Order Number</div>
	<?php echo $this->session->flashdata('order'); ?>	
</div>
<h2>Transfer Bank</h2>
<?php foreach ($bank->result() as $val) : ?>
<div class="ui list">
	<a class="item">
		<i class="right triangle icon"></i>
		<div class="content">
			<div class="header"><?php echo $val->fs_nama_bank; ?></div>
			<div class="description"><?php echo $val->fs_no_rekening . ' - ' .$val->fs_atas_nama; ?></div>
		</div>
	</a>
</div>
<?php endforeach; ?>