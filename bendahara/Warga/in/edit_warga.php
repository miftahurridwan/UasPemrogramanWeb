<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM data_warga WHERE no='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>

<div class="card card-success">
  <div class="card-header">
    <h3 class="card-title"><i class="fa fa-edit"></i> Ubah Data Warga</h3>
  </div>
  <form action="" method="post" enctype="multipart/form-data">
    <div class="card-body">

    <input type='hidden' class="form-control" name="no" value="<?php echo $data_cek['no']; ?>" readonly/>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nama Kepala Keluarga</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="kepala_keluarga" name="kepala_keluarga" value="<?php echo $data_cek['kepala_keluarga']; ?>"/>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Jumlah Keluarga</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="jumlah_keluarga" name="jumlah_keluarga" value="<?php echo $data_cek['jumlah_keluarga']; ?>"/>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">alamat</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $data_cek['alamat']; ?>"/>
        </div>
      </div>

    </div>
    <div class="card-footer">
      <input type="submit" name="Ubah" value="Simpan" class="btn btn-success" >
      <a href="?page=i_data_warga" title="Kembali" class="btn btn-secondary">Batal</a>
    </div>
  </form>
</div>



<?php

    if (isset ($_POST['Ubah'])){
    $sql_ubah = "UPDATE data_warga SET
        kepala_keluarga='".$_POST['kepala_keluarga']."',
        jumlah_keluarga='".$_POST['jumlah_keluarga']."',
        alamat='".$_POST['alamat']."'
        WHERE no='".$_POST['no']."'";
    $query_ubah = mysqli_query($koneksi, $sql_ubah);
    mysqli_close($koneksi);

    if ($query_ubah) {
        echo "<script>
      Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=i_data_warga';
        }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=i_data_warga';
        }
      })</script>";
    }}
?>
