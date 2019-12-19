<div class="container-fluid">
	<h3><i class="fas fa-edit"></i> EDIT DATA MENU</h3>

	<?php foreach ($menu as $menu) : ?>

		<form method="post" action="<?php echo base_url().'admin/data_menu/update' ?>">

			<div class="for-group">
				<label>Nama Menu</label>
				<input type="text" name="nama_menu" class="form-control" value="<?php echo $menu->nama_menu ?>">
			</div>
			
			<div class="for-group">
				<label>Keterangan</label>
				<input type="hidden" name="id_menu" class="form-control" value="<?php echo $menu->id_menu ?>">
				<input type="text" name="keterangan" class="form-control" value="<?php echo $menu->keterangan ?>">
			</div>
			
			<div class="for-group">
				<label>Kategori</label>
				<input type="text" name="kategori" class="form-control" value="<?php echo $menu->kategori ?>">
			</div>
			
			<div class="for-group">
				<label>Harga</label>
				<input type="text" name="harga" class="form-control" value="<?php echo $menu->harga ?>">
			</div>
			
			<button type="submit" class="btn btn-primary btn-sm mt-3"> SIMPAN </button>

		</form>

	<?php endforeach; ?>
</div>