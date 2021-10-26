<div class="content-wrapper">
<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Tambah Data 
    </h1>
    <ol class="breadcrumb">
      <li><a href="admin.php"> Home</a></li>
      <li class="active">Tambah Data</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
  <!-- Main row -->
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Identitas Nasabah</h3>
          </div><!-- /.box-header -->
          <div class="box-body">
            <?php 
            
            include '../koneksi/koneksi.php';
            if(isset($_POST['b1'])){
              if(empty($_POST['nm']) or empty($_POST['id_kdi']) or empty($_POST['id_bag']) or empty($_POST['id_lk'])){
                echo '<div class="alert alert-warning alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span></button>
                <strong>Error!</strong> Data tidak boleh ada yang kosong.
                </div>';
              }else{
                $kdi = $_POST['id_kdi'];
                $kdi = preg_replace("/[^0-9]/","",$kdi)[1].preg_replace("/[^0-9]/","",$kdi)[2];
                $bag = $_POST['id_bag'];
                $bag = preg_replace("/[^0-9]/","",$bag)[1].preg_replace("/[^0-9]/","",$bag)[2];
                $lk = $_POST['id_lk'];
                $lk = preg_replace("/[^0-9]/","",$lk)[1].preg_replace("/[^0-9]/","",$lk)[2];

                $q1=mysqli_fetch_array(mysqli_query($koneksi,"SELECT MAX(id_data) AS id_data FROM data WHERE id_kdi='$_POST[id_kdi]' AND id_bag='$_POST[id_bag]' AND id_lk='$_POST[id_lk]'"));
                if($q1['id_data']=="")
                {
                  $id_data = "KD".$lk.$bag.$kdi."01";
                }else
                {
                  $id_data=preg_replace("/[^0-9]/","",$q1['id_data']);
                  $id_data++;
                  if(strlen($id_data)!=8)
                  {
                    $id_data = "KD0".$id_data;
                  }else
                  {
                    $id_data = "KD".$id_data;
                  }
                }
                
                $sql=mysqli_query($koneksi,"INSERT INTO data values ('$id_data','$_POST[nm]','$_POST[id_kdi]','$_POST[id_bag]','$_POST[id_lk]')");
                echo '<div class="alert alert-success alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span></button>
                <strong>Sukses!</strong> Data berhasil ditambah.
                </div>';
                echo 
                '<div class="row">
                    <div class="form-group">
                        <div class="col-md-12">
                          <label>ID Data</label>
                            <input type="text" class="form-control" maxlength="100" value="'.$id_data.'" readonly>
                        </div>
                    </div>
                </div>';
              }
            }
            ?>
            <form id="contactForm" action="" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="form-group">
                  <div class="col-md-12">
                    <label>NIK </label>
                    <input type="text" name="nik" class="form-control" maxlength="100" placeholder="NIK">
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="form-group">
                  <div class="col-md-12">
                    <label>Nama </label>
                    <input type="text" name="nama" class="form-control" maxlength="100" placeholder="Nama">
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="form-group">
                  <div class="col-md-12">
                    <label>Tempat Lahir </label>
                    <input type="text" name="tempat lahir" class="form-control" maxlength="100" placeholder="Tempat Lahir">
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="form-group">
                  <div class="col-md-12">
                    <label>Tanggal Lahir</label>
                    <input type="text" name="tanggal lahir" class="form-control" maxlength="100" placeholder="Tanggal Lahir">
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="form-group">
                  <div class="col-md-12">
                    <label>Alamat Domisili</label>
                    <input type="text" name="alamat domisili" class="form-control" maxlength="100" placeholder="Alamat">
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="form-group">
                  <div class="col-md-12">
                    <label>No.Handphone </label>
                    <input type="text" name="no_hp" class="form-control" maxlength="100" placeholder="No.Handphone">
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="form-group">
                  <div class="col-md-12">
                    <label>No. Handphone Darurat </label>
                    <input type="text" name="no_hp_darurat" class="form-control" maxlength="100" placeholder="No.Darurat">
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="form-group">
                  <div class="col-md-12">
                    <label>Agama </label>
                    <input type="text" name="nm" class="form-control" maxlength="100" placeholder="Agama">
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="form-group">
                  <div class="col-md-12">
                    <label>Jumlah Tanggungan</label>
                    <input type="text" name="jml_tanggungan" class="form-control" maxlength="100" placeholder="Jumlah Tanggungan">
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="form-group">
                  <div class="col-md-12">
                    <label>Foto KTP </label>
                    <input type="file" name="ft_ktp" class="form-control" maxlength="100" placeholder="Foto KTP">
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="form-group">
                  <div class="col-md-12">
                    <label>Foto Selfie Bersama KTP</label>
                    <input type="file" name="ft_s_ktp" class="form-control" maxlength="100" placeholder="Foto Selfie Bersama KTP">
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="form-group">
                  <div class="col-md-12">
                    <label>Foto Keterangan Izin Usaha </label>
                    <input type="file" name="ft_izin_usaha" class="form-control" maxlength="100" placeholder="Foto Keterangan Izin Usaha">
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="form-group">
                  <div class="col-md-12">
                    <label>Foto PP</label>
                    <input type="file" name="ft_pp" class="form-control" maxlength="100" placeholder="Foto PP">
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-12">
                  <button type="submit" name="b1" class="btn btn-primary"><i class="fa fa-save"></i> Simpan Data</button>
                  <a href="admin.php?p=list-data" class="btn btn-info"><i class="fa fa-table"></i> Lihat List</a>
                </div>
              </div>
            </form>
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div><!-- /.col -->
    </div><!-- /.row -->
  </section><!-- /.content -->
</div>