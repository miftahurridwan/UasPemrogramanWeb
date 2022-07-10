<div class="alert alert-success alert-dismissible">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	
</div>

<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> DATA WARGA</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="?page=i_add_warga" class="btn btn-primary">
					<i class="fa fa-edit"></i> Tambah Data</a>
			</div>
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>no</th>
						<th>kepala_keluarga</th>
						<th>jumlah_keluarga</th>
						<th>alamat</th>
						
					</tr>
				</thead>
				<tbody>

			<?php
			  $no = 1;
              $sql = $koneksi->query("select * from data_warga order by no");
              while ($data= $sql->fetch_assoc()) {
            ?>
				<tr>
						<td>
							<?php echo $no++; ?>
						</td>
						<td>
							<?php  echo $data['kepala_keluarga']; ?>
						</td>
						<td>
							<?php echo $data['jumlah_keluarga']; ?>
						</td>
						<td>
							<?php echo $data['alamat']; ?>
						</td>
						
					
						<td>
							<a href="?page=i_edit_warga&kode=<?php echo $data['no']; ?>" title="Ubah" class="btn btn-success btn-sm">
								<i class="fa fa-edit"></i>
							</a>
							<a href="?page=i_del_warga&kode=<?php echo $data['no']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
							 title="Hapus" class="btn btn-danger btn-sm">
								<i class="fa fa-trash"></i>
								</>
						</td>
					</tr>
					<?php
              }
            ?>	

				</tbody>
				</tfoot>
			</table>
		</div>
	</div>
	<!-- /.card-body -->
	