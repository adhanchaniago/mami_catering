<div class="container-fluid">
	<button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_menu"><i class="fas fa-plus fa-sm"></i> Tambah Menu </button>

	<table id="example" class="table table-striped table-bordered" style="width:100%">
		<tr>
			<th>NO</th>
			<th>NAMA MENU</th>
			<th>KETERANGAN</th>
			<th>KATEGORI</th>
			<th>HARGA</th>
			<th colspan="3">AKSI</th>
		</tr>
		
		<?php
		$no=1;
		foreach ($menu as $menu) : ?>

		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $menu->nama_menu ?></td>
			<td><?php echo $menu->keterangan ?></td>
			<td><?php echo $menu->kategori ?></td>
			<td><?php echo $menu->harga ?></td>
			<td><div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div></td>
			<td><?php echo anchor('admin/data_menu/edit/' .$menu->id_menu, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?></td>
			<td><?php echo anchor('admin/data_menu/hapus/' .$menu->id_menu, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?></td>
		</tr>

		<?php endforeach; ?>
	</table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_menu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM INPUT MENU</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/data_menu/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">
        	
        	<div class="form-group">
        		<label>Nama Menu</label>
        		<input type="text" name="nama_menu" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Keterangan</label>
        		<input type="text" name="keterangan" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Kategori</label>
        		<select class="form-control" name="kategori">
            <option>Tradisional</option>
            <option>Chinese</option>
            <option>Modern</option>
            <option>Minuman</option>
            <option>Coffee and Snack</option> 
            </select>
        	</div>

        	<div class="form-group">
        		<label>Harga</label>
        		<input type="text" name="harga" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Gambar Menu</label><br>
        		<input type="file" name="gambar" class="form-control">
        	</div>

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">BATAL</button>
        <button type="submit" class="btn btn-primary">SIMPAN</button>
      </div>

      </form>

    </div>
  </div>
</div>