<div class="container">
  <h2>Periode Menu</h2>
  <p>The .dropdown class is used to indicate a dropdown menu.</p>
  <p>Use the .dropdown-menu class to actually build the dropdown menu.</p>
  <p>To open the dropdown menu, use a button or a link with a class of .dropdown-toggle and data-toggle="dropdown".</p>                                          

  <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Periode Menu
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="" onclick="minggu();">Mingguan</a>
    <a class="dropdown-item" href="" onclick="bulan();">Bulanan</a>
  </div>

  <br><br>
  <div class="container-fluit">
    <table id="example" class="table table-striped table-bordered" style="width:100%">
		<tr>
			<th>NAMA MENU</th>
			<th>KETERANGAN</th>
			<th>KATEGORI</th>
			<th>HARGA</th>
		</tr>
		<tr>
			<td id="nama"></td>
			<td id="ket"></td>
			<td id="kat"></td>
			<td id="harga"></td>
        </tr>

	</table>
  </div>

  <script type="text/javascript">
    function minggu() {
        alert('minggu')
        // $.ajax({
        //     url : "<?php echo base_url('product/get_sub_category');?>",
        //     method : "POST",
        //     data : {id: id},
        //     async : true,
        //     dataType : 'json',
        //     success: function(data){
                    
        //         var html = '';
        //         var i;
        //         for(i=0; i<data.length; i++){
        //             html += '<option value='+data[i].subcategory_id+'>'+data[i].subcategory_name+'</option>';
        //         }
        //         $('#nama').val();

        //     }
        // });
        // return false;
    }
    function bulan() {
        alert('bulan')
    }
  </script>
                                    
</div>
</div>